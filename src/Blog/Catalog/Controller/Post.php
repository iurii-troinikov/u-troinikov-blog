<?php

declare(strict_types=1);

namespace Blog\Catalog\Controller;

use Blog\Framework\Http\ControllerInterface;

class Post implements ControllerInterface
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
    public function execute(): string
    {
        $post = $this->request->getParameter('post');
        $page = 'post.php';
        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}
