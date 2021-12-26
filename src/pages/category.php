<?php
/** @var \Blog\Catalog\Model\Category\Entity $category */
?>
<section title="Posts">
    <h1><?= $category->getName()?></h1>
    <div class="post-list">
        <?php foreach ($foo->getByIds($category->getPostIds()) as $post) : ?>
            <div class="post">
                <a href="/<?= $post['url']?>" title="<?= $post['name']?>">
                    <img src="/post-placeholder.jpg" alt="<?= $post['name']?>" width="200"/>
                </a>
                <a href="/<?= $post['url']?>" title="<?= $post['name']?>"><?= $post['name']?></a>

                <button type="button">Read</button>
            </div>
        <?php endforeach; ?>
    </div>
</section>
