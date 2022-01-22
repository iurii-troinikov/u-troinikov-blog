<?php
/** @var \Blog\Catalog\Block\CategoryList $block */
?>
<div class="navigation-wrapper" id="navigation-menu">
    <ul>
        <?php foreach ($block->getCategories() as $category) : ?>
            <li>
                <a href="/<?= $category->getUrl() ?>"><?= $category->getName() ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
