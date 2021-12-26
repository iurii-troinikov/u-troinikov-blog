<?php

/** @var \Blog\Catalog\Model\Post\Entity $post */
?>
<div class="post-page">
    <img src="post-placeholder.jpg" alt="<?= $post->getName() ?>" width="300"/>
    <h1><?= $post->getName() ?></h1>
    <p><?= $post->getDescription() ?></p>
    <button type="button">Read</button>
</div>
