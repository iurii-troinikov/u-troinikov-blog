<?php

declare(strict_types=1);

namespace Blog\Catalog\Controller;

use Blog\Catalog\Model\Post\Entity;
use Blog\Framework\Http\ControllerInterface;
use Blog\Framework\Http\Response\Raw;
use Blog\Catalog\Block\Post\RecentlyViewed;

class Post implements ControllerInterface
{
    private \Blog\Framework\View\PageResponse $pageResponse;

    private \Blog\Framework\Http\Request $request;

    private \Blog\Framework\Session\Session $session;

    /**
     * @param \Blog\Framework\View\PageResponse $pageResponse
     * @param \Blog\Framework\Http\Request $request
     * @param \Blog\Framework\Session\Session $session
     */
    public function __construct(
        \Blog\Framework\View\PageResponse $pageResponse,
        \Blog\Framework\Http\Request $request,
        \Blog\Framework\Session\Session $session
    ) {
        $this->pageResponse = $pageResponse;
        $this->request = $request;
        $this->session = $session;
    }
    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        /** @var Entity $post */
        $post = $this->request->getParameter('post');
        $recentlyViewedPosts = (array) $this->session->getData(RecentlyViewed::SESSION_KEY_RECENTLY_VIEWED_POSTS);
        array_unshift($recentlyViewedPosts, $post->getPostId());
        $this->session->setData(
            RecentlyViewed::SESSION_KEY_RECENTLY_VIEWED_POSTS,
            array_unique($recentlyViewedPosts)
        );
        return $this->pageResponse->setBody(\Blog\Catalog\Block\Post::class);
    }
}
