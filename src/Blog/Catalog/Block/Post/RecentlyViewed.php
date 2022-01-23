<?php

declare(strict_types=1);

namespace Blog\Catalog\Block\Post;

use Blog\Catalog\Model\Post\Entity;

class RecentlyViewed extends \Blog\Framework\View\Block
{
    public const SESSION_KEY_RECENTLY_VIEWED_POSTS = 'recently_viewed_posts';

    public const RECENTLY_VIEWED_POSTS_COUNT = 16;

    protected string $template = '../src/Blog/Catalog/view/post/recently_viewed.php';

    private \Blog\Framework\Http\Request $request;

    private \Blog\Framework\Session\Session $session;

    private \Blog\Catalog\Model\Post\Repository $postRepository;
    /**
     * @param \Blog\Framework\Http\Request $request
     * @param \Blog\Framework\Session\Session $session
     * @param \Blog\Catalog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \Blog\Framework\Http\Request $request,
        \Blog\Framework\Session\Session $session,
        \Blog\Catalog\Model\Post\Repository $postRepository
    ) {
        $this->session = $session;
        $this->postRepository = $postRepository;
        $this->request = $request;
    }
    /**
     * @return Entity[]
     */
    public function getPosts(): array
    {
        $postIds = (array) $this->session->getData(self::SESSION_KEY_RECENTLY_VIEWED_POSTS);
        /** @var Entity $post */
        if ($post = $this->request->getParameter('post')) {
            if (($key = array_search($post->getPostId(), $postIds, true)) !== false) {
                unset($postIds[$key]);
            }
        }
        if (empty($postIds)) {
            return [];
        }
        $in = str_repeat('?,', count($postIds) - 1) . '?';
        $select = $this->postRepository->select()
            ->where("post_id IN($in)")
            ->limit(self::RECENTLY_VIEWED_POSTS_COUNT);
        return $this->postRepository->fetchEntities($select, array_values($postIds));
    }
}
