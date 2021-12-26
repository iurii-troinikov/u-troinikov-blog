<?php

declare(strict_types=1);

namespace Blog\Catalog;

use Blog\Catalog\Controller\Category;
use Blog\Catalog\Controller\Post;

class Router implements \Blog\Framework\Http\RouterInterface
{
    private \Blog\Framework\Http\Request $request;
    private Model\Category\Repository $categoryRepository;
    /**
     * @param \Blog\Framework\Http\Request $request
     * @param Model\Category\Repository $categoryRepository
     */
    public function __construct(
        \Blog\Framework\Http\Request $request,
        \Blog\Catalog\Model\Category\Repository $categoryRepository
    )
    {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';
        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            return Category::class;
        }
        if ($data = catalogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}
