<?php

declare(strict_types=1);

/** @var \Blog\Catalog\Block\Post\RecentlyViewed $block */

if (!($posts = $block->getPosts())) {
    return;
}
?>
<section title="Recently Viewed Posts">
    <div class="recently-viewed-slider-wrapper content-wrapper">
        <h2>Recently Viewed Posts</h2>
        <div class="post-list recently-viewed-slider-wrapper campus-slider">
            <?php foreach ($posts as $post) : ?>
                <div class="post">
                    <a href="/<?= $post->getUrl() ?>" title="<?= $post->getName() ?>" class="post-item-image">
                        <img src="post-placeholder.jpg" alt="<?= $post->getName() ?>"/>
                    </a>
                    <a href="/<?= $post->getUrl() ?>"
                       title="<?= $post->getName() ?>"
                       class="post-item-title"
                    ><?= $post->getName() ?></a>
                    <button type="button" class="add-to-cart-button button-hover">Read</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
