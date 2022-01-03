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
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getByUrl(string $url)
    {
        return $this->fetchOne(
            $this->select()->where('url = :url'),
            [
                ':url' => $url
            ]
        );
    }
}
