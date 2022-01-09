<?php
/** @var \Blog\Catalog\Block\Category $block */
?>
<div title="category-wrapper" class="category-page content-wrapper">
    <h1 class="category-page-title"><?= $block->getCategory()->getName() ?></h1>
    <div class="post-list">
        <?php foreach ($block->getCategoryPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>" class="post-item-image">
                    <img src="post-placeholder.jpg" alt="<?= $post->getName() ?>" />
                </a>
                <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>"
                   class="post-item-title"><?= $post->getName() ?></a>
                <button type="button" class="add-to-cart-button button-hover">Read</button>
        <?php endforeach; ?>
    </div>
</div>
