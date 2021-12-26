<?php

declare(strict_types=1);

namespace Blog\Framework\View;

use Blog\Framework\Http\Response\Html;

class PageResponse extends Html
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
    /**
     * @param string $contentBlocClass
     * @return PageResponse
     */
    public function setBody(string $contentBlocClass): PageResponse
    {
        return parent::setBody((string) $this->renderer->setContent($contentBlocClass));
    }
}
