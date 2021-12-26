<?php

declare(strict_types=1);

namespace Blog\Catalog\Controller;

use Blog\Framework\Http\ControllerInterface;

class Post implements ControllerInterface
{
    private \Blog\Framework\View\Renderer $renderer;

    /**
     * @param \Blog\Framework\View\Renderer $renderer
     */
    public function __construct(
        \Blog\Framework\View\Renderer $renderer
    ) {
        $this->renderer = $renderer;
    }
    public function execute(): string
    {
        return (string) $this->renderer->setContent(\Blog\Catalog\Block\Post::class);
    }
}
