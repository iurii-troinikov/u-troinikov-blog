<?php

declare(strict_types=1);

namespace Blog\Catalog\Block;

use Blog\Catalog\Model\Post\Entity as PostEntity;

class Post extends \Blog\Framework\View\Block
{
    private \Blog\Framework\Http\Request $request;

    protected string $template = '../src/Blog/Catalog/view/post.php';

    /**
     * @param \Blog\Framework\Http\Request $request
     */
    public function __construct(
        \Blog\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    /**
     * @return PostEntity
     */
    public function getPost(): PostEntity
    {
        return $this->request->getParameter('post');
    }
}
