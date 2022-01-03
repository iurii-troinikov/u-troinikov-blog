<?php

declare(strict_types=1);

namespace Blog\Catalog\Block;

use Blog\Catalog\Model\Category\Entity as CategoryEntity;
use Blog\Catalog\Model\Category\Repository as CategoryRepository;
use Blog\Catalog\Model\Post\Repository as PostRepository;

class CategoryList extends \Blog\Framework\View\Block
{
    private \Blog\Catalog\Model\Category\Repository $categoryRepository;
    protected string $template = '../src/Blog/Catalog/view/category_list.php';

    /**
     * @param \Blog\Catalog\Model\Category\Repository $categoryRepository
     */
    public function __construct(\Blog\Catalog\Model\Category\Repository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getCategories(): array
    {
        $select = $this->categoryRepository->select()
            ->distinct(true)
            ->fields(CategoryRepository::TABLE . '.*', true)
            ->innerJoin(PostRepository::TABLE_CATEGORY_POST, '', 'USING(`category_id`)');

        return $this->categoryRepository->fetchEntities($select);
    }
}
