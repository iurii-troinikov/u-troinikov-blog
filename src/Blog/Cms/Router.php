<?php

declare(strict_types=1);

namespace Blog\Cms;

use Blog\Cms\Controller\Page;

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
        $cmsPage = [
            '',
            'test-page',
            'test-page-2',
        ];
        if (in_array($requestUrl, $cmsPage)) {
            $this->request->setParameter('page', $requestUrl ?: 'home');

            return Page::class;
        }
        return '';
    }
}
