<?php

declare(strict_types=1);

namespace Blog\Install;

use Blog\Install\Controller\Index;

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
        if ($this->request->getRequestUrl() === 'install') {
            return Index::class;
        }

        return '';
    }
}
