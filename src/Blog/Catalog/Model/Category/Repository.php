<?php

declare(strict_types=1);

namespace Blog\Catalog\Model\Category;

class Repository extends \Blog\Framework\Database\AbstractRepository
{
    public const TABLE = 'category';
    public const ENTITY = Entity::class;

    /**
     * @param string $url
     * @return object|null
     */
    public function getByUrl(string $url): ?object
    {
        return $this->fetchOne(
            $this->select()->where('url = :url'),
            [
                ':url' => $url
            ]
        );
    }
}
