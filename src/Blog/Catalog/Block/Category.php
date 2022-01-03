<?php

declare(strict_types=1);

namespace Blog\Catalog\Block;

use Blog\Catalog\Model\Category\Entity as CategoryEntity;
use Blog\Catalog\Model\Post\Entity as PostEntity;

class Category extends \Blog\Framework\View\Block
{
    private \Blog\Framework\Http\Request $request;
    private \Blog\Catalog\Model\Post\Repository $postRepository;
    protected string $template = '../src/Blog/Catalog/view/category.php';

    /**
     * @param \Blog\Framework\Http\Request $request
     * @param \Blog\Catalog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \Blog\Framework\Http\Request $request,
        \Blog\Catalog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
    }

    /**
     * @return CategoryEntity
     */
    public function getCategory(): CategoryEntity
    {
        return $this->request->getParameter('category');
    }

    /**
     * @return PostEntity[]
     */
    public function getCategoryPosts(): array
    {
        return $this->postRepository->getByCategoryId(
            $this->getCategory()->getCategoryId()
        );
    }
}
