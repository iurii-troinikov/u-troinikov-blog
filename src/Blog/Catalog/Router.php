<?php

declare(strict_types=1);

namespace Blog\Catalog;

use Blog\Catalog\Controller\Category;
use Blog\Catalog\Controller\Post;

class Router implements \Blog\Framework\Http\RouterInterface
{
    private \Blog\Framework\Http\Request $request;
    private Model\Category\Repository $categoryRepository;
    private Model\Post\Repository $postRepository;

    /**
     * @param \Blog\Framework\Http\Request $request
     * @param Model\Category\Repository $categoryRepository
     * @param Model\Post\Repository $postRepository
     */
    public function __construct(
        \Blog\Framework\Http\Request $request,
        \Blog\Catalog\Model\Category\Repository $categoryRepository,
        \Blog\Catalog\Model\Post\Repository $postRepository
    )
    {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if (!$requestUrl) {
            return '';
        }
        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            return Category::class;
        }
        if ($post = $this->postRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('post', $post);
            return Post::class;
        }
        return '';
    }
}
