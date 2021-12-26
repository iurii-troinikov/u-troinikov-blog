<?php

declare(strict_types=1);

namespace Blog\Catalog\Model\Post;

class Repository
{
    private \DI\FactoryInterface $factory;

    /**
     * @param \DI\FactoryInterface $factory
     */
    public function __construct(\DI\FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return Entity[]
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()->setPostId(1)
                ->setName('Post 1')
                ->setUrl('post-1')
                ->setDescription('Lorem ipsum dolor sit amet'),
            2 => $this->makeEntity()->setPostId(2)
                ->setName('Post 2')
                ->setUrl('post-2')
                ->setDescription('Lorem ipsum dolor sit amet'),
            3 => $this->makeEntity()->setPostId(3)
                ->setName('Post 3')
                ->setUrl('post-3')
                ->setDescription('Lorem ipsum dolor sit amet'),
            4 => $this->makeEntity()->setPostId(4)
                ->setName('Post 4')
                ->setUrl('post-4')
                ->setDescription('Lorem ipsum dolor sit amet'),
            5 => $this->makeEntity()->setPostId(5)
                ->setName('Post 5')
                ->setUrl('post-5')
                ->setDescription('Lorem ipsum dolor sit amet'),
            6 => $this->makeEntity()->setPostId(6)
                ->setName('Post 6')
                ->setUrl('post-6')
                ->setDescription('Lorem ipsum dolor sit amet'),
        ];
    }

    /**
     * @param string $url
     * @return ?Entity
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getList(),
            static function ($post) use ($url) {
                return $post->getUrl() === $url;
            }
        );

        return array_pop($data);
    }

    /**
     * @param array $postIds
     * @return Entity[]
     */
    public function getByIds(array $postIds)
    {
        return array_intersect_key(
            $this->getList(),
            array_flip($postIds)
        );
    }

    /**
     * @return Entity
     */
    private function makeEntity(): Entity
    {
        return $this->factory->make(Entity::class);
    }
}
