<?php

declare(strict_types=1);

namespace Blog\Cms\Controller;

class Page implements \Blog\Framework\Http\ControllerInterface
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
        $page = $this->request->getParameter('page') . '.php';
        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}
