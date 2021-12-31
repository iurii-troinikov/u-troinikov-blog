<?php

declare(strict_types=1);

namespace Blog\Install\Command;

use Blog\Catalog\Model\Category\Repository as CategoryRepository;
use Blog\Catalog\Model\Post\Repository as PostRepository;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateData extends \Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'install:generate-data';
    private \Blog\Framework\Database\Adapter\AdapterInterface $adapter;
    private OutputInterface $output;
    private const POSTS_COUNT = 250;

    /**
     * @param \Blog\Framework\Database\Adapter\AdapterInterface $adapter
     * @param string|null $name
     */
    public function __construct(
        \Blog\Framework\Database\Adapter\AdapterInterface $adapter,
        string $name = null
    ) {
        parent::__construct($name);
        $this->adapter = $adapter;
    }

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this->setDescription('Generate demo data for blog testing');

        parent::configure();
    }
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->output = $output;
        $this->generateData();
        $output->writeln('Completed!');

        return self::SUCCESS;
    }
    /**
     * Generate test data
     *
     * @return void
     */
    private function generateData(): void
    {
        $this->profile([$this, 'truncateTables']);
        $this->profile([$this, 'generateCategories']);
        $this->profile([$this, 'generatePosts']);
        $this->profile([$this, 'generatePostCategories']);
    }

    /**
     * Truncate (empty) tables before inserting new data
     *
     * @return void
     */
    private function truncateTables(): void
    {
        $tables = [
            PostRepository::TABLE_CATEGORY_POST,
            CategoryRepository::TABLE,
            PostRepository::TABLE,
        ];
        $connection = $this->adapter->getConnection();
        $connection->query('SET FOREIGN_KEY_CHECKS=0');

        foreach ($tables as $table) {
            $connection->query("TRUNCATE TABLE `$table`");
            $this->output->writeln("Truncated table: $table");
        }

        $connection->query('SET FOREIGN_KEY_CHECKS=1');
    }
    /**
     * Insert seven categories. Add data to random 5 of them
     *
     * @return void
     */
    private function generateCategories(): void
    {
        $categories = [
            'Summer holidays', 'Winter holidays', 'All holidays'
        ];
        $statement = $this->adapter->getConnection()
            ->prepare(<<<SQL
                INSERT INTO category (`name`, `url`)
                VALUES (:name, :url);
            SQL);

        foreach ($categories as $category) {
            $statement->bindValue(':name', $category);
            $statement->bindValue(':url', strtolower($category));
            $statement->execute();
        }
    }

    /**
     * @return void
     * @throws \Exception
     */
    private function generatePosts(): void
    {
        $statement = $this->adapter->getConnection()
            ->prepare(<<<SQL
                INSERT INTO post (`sku`, `name`, `url`, `description`, `qty`, `created_at`)
                VALUES (:sku, :name, :url, :description, :qty, :created_at);
            SQL);

        for ($i = 1; $i <= self::POSTS_COUNT; $i++) {
            $name = "Post $i";
            $url = str_replace(' ', '_', strtolower($name));
            $statement->bindValue(':sku', uniqid('', true));
            $statement->bindValue(':name', $name);
            $statement->bindValue(':url', $url);
            $statement->bindValue(':description', "$name short description text");
            $statement->bindValue(':qty', random_int(0, 10), \PDO::PARAM_INT);
            $statement->bindValue(':created_at', date('Y-m-d', random_int(1633046400, 1635724800)));
            $statement->execute();
        }
    }

    /**
     * @return void
     * @throws \Exception
     */
    private function generatePostCategories(): void
    {
        $statement = $this->adapter->getConnection()
            ->prepare(<<<SQL
                INSERT INTO category_post (`category_id`, `post_id`)
                VALUES (:category_id, :post_id);
            SQL);
        // Get only 3 random categories of total 3
        $categoryIds = array_rand(array_flip(range(1, 3)), 3);
        for ($i = 1; $i <= self::POSTS_COUNT; $i++) {
            if (random_int(1, 3) === 1) {
                continue;
            }
            $postCategories = (array) array_rand(array_flip($categoryIds), random_int(1, 3));
            foreach ($postCategories as $categoryId) {
                $statement->bindValue(':category_id', $categoryId);
                $statement->bindValue(':post_id', $i);
                $statement->execute();
            }
        }
    }
    /**
     * @param callable $callback
     * @return void
     */
    private function profile(callable $callback): void
    {
        $start = microtime(true);
        $callback();
        $totalTime = number_format(microtime(true) - $start, 4);
        $this->output->writeln("Executing <info>$callback[1]</info> took <info>$totalTime</info>");
    }
}
