<?php
declare(strict_types=1);

namespace Blog\Catalog;


use Blog\Catalog\Controller\Category;
use Blog\Catalog\Controller\Post;

class Router implements \Blog\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
public function match(string $requestUrl): string
{
  //  require_once '../src/data.php';
 //   if ($data = catalogGetCategoryByUrl($requestUrl)) {
 //     return Category::class;
 //   }
 //   if ($data = catalogGetPostByUrl($requestUrl)) {
 //      return Post::class;
 //   }

    return '';
}
}

