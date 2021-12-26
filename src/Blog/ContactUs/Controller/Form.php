<?php

declare(strict_types=1);

namespace Blog\ContactUs\Controller;

use Blog\Framework\Http\ControllerInterface;
use Blog\Framework\Http\Response\Raw;
use Blog\Framework\View\Block;

class Form implements ControllerInterface
{
    private \Blog\Framework\View\PageResponse $pageResponse;
    /**
     * @param \Blog\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \Blog\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
    }
    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
            Block::class,
            '../src/Blog/ContactUs/view/contact-us.php'
        );
    }
}
