<?php

declare(strict_types=1);

namespace Blog\Catalog;

use Blog\Catalog\Controller\Category;
use Blog\Catalog\Controller\Post;

class Router implements \Blog\Framework\Http\RouterInterface
{
    private \Blog\Framework\Http\Request $request;

    /**
     * @param \Blog\Framework\Http\Request $request
     */
    public function __construct(
        \Blog\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';
        if ($data = catalogGetCategoryByUrl($requestUrl)) {
            $this->request->setParameter('category', $data);
            return Category::class;
        }
        if ($data = catalogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }

        return '';
    }
}
