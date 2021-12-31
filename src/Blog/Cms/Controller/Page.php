<?php

declare(strict_types=1);

namespace Blog\Cms\Controller;

use Blog\Framework\Http\Response\Raw;
use Blog\Framework\View\Block;

class Page implements \Blog\Framework\Http\ControllerInterface
{
    private \Blog\Framework\View\PageResponse $pageResponse;
    private \Blog\Framework\Http\Request $request;

    /**
     * @param \Blog\Framework\Http\Request $request
     * @param \Blog\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \Blog\Framework\Http\Request $request,
        \Blog\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
        $this->request = $request;
    }
    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
Block::class,
            '../src/Blog/Cms/view/' . $this->request->getParameter('page') . '.php'
        );
    }
}
