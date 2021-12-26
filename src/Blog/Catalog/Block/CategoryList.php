<?php

declare(strict_types=1);

namespace Blog\Catalog\Block;

use Blog\Catalog\Model\Category\Entity as CategoryEntity;

class CategoryList extends \Blog\Framework\View\Block
{
    private \Blog\Catalog\Model\Category\Repository $categoryRepository;
    protected string $template = '../src/Blog/Catalog/view/category_list.php';

    /**
     * @param \Blog\Catalog\Model\Category\Repository $categoryRepository
     */
    public function __construct(\Blog\Catalog\Model\Category\Repository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return CategoryEntity[]
     */
    public function getCategories(): array
    {
        return $this->categoryRepository->getList();
    }
}
