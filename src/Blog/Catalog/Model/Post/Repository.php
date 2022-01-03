<?php

declare(strict_types=1);

namespace Blog\Catalog\Model\Post;

class Repository extends \Blog\Framework\Database\AbstractRepository
{
    public const TABLE = 'post';

    public const TABLE_CATEGORY_POST = 'category_post';

    public const ENTITY = Entity::class;

    /**
     * @param string $url
     * @return Entity|object|null
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getByUrl(string $url): ?Entity
    {
        return $this->fetchOne(
            $this->select()->where('url = :url'),
            [
                ':url' => $url
            ]
        );
    }

    /**
     * @param int $categoryId
     * @return Entity[]
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getByCategoryId(int $categoryId): array
    {
        $query = $this->select()
            ->innerJoin(self::TABLE_CATEGORY_POST, '', ' USING(`post_id`)')
            ->where('category_id = :category_id')
            ->limit(100);

        return $this->fetchEntities(
            $query,
            [
                ':category_id' => $categoryId
            ]
        );
    }
}
