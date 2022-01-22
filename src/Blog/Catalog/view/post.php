<?php

/** @var \Blog\Catalog\Block\Post $block */
$post = $block->getPost();
?>
<div class="post-page">
    <div class="post-media">
        <figure class="post-image">
            <img src="post-placeholder.jpg" alt="<?= $post->getName() ?>"/>
        </figure>
        <div class="post-description">
            <h1 class="post-title page-title"><?= $post->getName() ?></h1>
            <p class="post-description"><?= $post->getDescription() ?></p>
            <button type="button" class="add-to-cart-button button-hover">Read</button>
        </div>
    </div>
    <section title="Recently Viewed Posts">
        <h2>Recently Viewed Posts</h2>
        <div class="post-list recently-viewed-slider-wrapper">
            <div class="recently-viewed-slider">
                <div class="post">
                    <a href="/post-1-url" title="post 1" class="post-item-image">
                        <img src="post-placeholder.jpg" alt="post 1"/>
                    </a>
                    <a href="/post-1-url" title="post 1" class="post-item-title">post 1</a>
                    <button type="button" class="add-to-cart-button button-hover">Read</button>
                </div>
                <div class="post">
                    <a href="/post-2-url" title="post 2" class="post-item-image">
                        <img src="post-placeholder.jpg" alt="post 2"/>
                    </a>
                    <a href="/post-2-url" title="post 2" class="post-item-title">post 2</a>
                    <button type="button" class="add-to-cart-button button-hover">Read</button>
                </div>
                <div class="post">
                    <a href="/post-3-url" title="post 3" class="post-item-image">
                        <img src="post-placeholder.jpg" alt="post 3"/>
                    </a>
                    <a href="/post-3-url" title="post 3" class="post-item-title">post 3</a>
                    <button type="button" class="add-to-cart-button button-hover">Read</button>
                </div>
            </div>
            <button class="slider-control-prev slider-control button-hover" type="button">
                <span class="slider-control-prev-icon"><i class="fas fa-chevron-left"></i></span>
                <span class="slider-control-prev-title">Previous</span>
            </button>
            <button class="slider-control-next slider-control button-hover" type="button">
                <span class="slider-control-next-icon"><i class="fas fa-chevron-right"></i></span>
                <span class="slider-control-prev-title">Next</span>
            </button>
        </div>
    </section>
    <section class="special-posts-section">
        <div class="content-wrapper">
            <h2>Special posts</h2>
            <div class="special-posts-section-items">

                <!-- 1 -->
                <div class="special-posts-section-item">
                    <div class="post">
                        <a href="/post-1-url" title="post 1" class="post-item-image">
                            <img src="post-placeholder.jpg" alt="post 1"/>
                        </a>
                        <a href="/post-1-url" title="post 1" class="post-item-title">post 1</a>
                    </div>

                    <div class="post-description">
                        <h3>Ipsum dolor sit amet</h3>
                        <p>Nam accumsan nunc sit amet elementum sollicitudin.
                            Integer vel lacus eget tortor lobortis tincidunt sed eu dolor.
                            Phasellus cursus augue ac pulvinar cursus.</p>
                        <p>Quisque ut erat ornare, feugiat turpis a, fringilla felis.
                            Nulla molestie lorem et orci sagittis, et accumsan ex porta.</p>
                        <button class="button-hover" type="submit">Sign up</button>
                    </div>
                </div>

                <!-- 2 -->
                <div class="special-posts-section-item">
                    <div class="post">
                        <a href="/post-1-url" title="post 2" class="post-item-image">
                            <img src="post-placeholder.jpg" alt="post 2"/>
                        </a>
                        <a href="/post-1-url" title="post 1" class="post-item-title">post 2</a>
                    </div>

                    <div class="post-description">
                        <h3>Ipsum dolor sit amet</h3>
                        <p>Nam accumsan nunc sit amet elementum sollicitudin.
                            Integer vel lacus eget tortor lobortis tincidunt sed eu dolor.
                            Phasellus cursus augue ac pulvinar cursus.</p>
                        <p>Quisque ut erat ornare, feugiat turpis a, fringilla felis.
                            Nulla molestie lorem et orci sagittis, et accumsan ex porta.</p>
                        <button class="button-hover" type="submit">Sign up</button>
                    </div>
                </div>

                <div class="special-posts-section-item">
                    <div class="post">
                        <a href="/post-1-url" title="post 2" class="post-item-image">
                            <img src="post-placeholder.jpg" alt="post 2"/>
                        </a>
                        <a href="/post-1-url" title="post 1" class="post-item-title">post 2</a>
                    </div>

                    <div class="post-description">
                        <h3>Ipsum dolor sit amet</h3>
                        <p>Nam accumsan nunc sit amet elementum sollicitudin.
                            Integer vel lacus eget tortor lobortis tincidunt sed eu dolor.
                            Phasellus cursus augue ac pulvinar cursus.</p>
                        <p>Quisque ut erat ornare, feugiat turpis a, fringilla felis.
                            Nulla molestie lorem et orci sagittis, et accumsan ex porta.</p>
                        <button class="button-hover" type="submit">Sign up</button>
                    </div>
                </div>

                <div class="special-posts-section-item">
                    <div class="post">
                        <a href="/post-1-url" title="post 2" class="post-item-image">
                            <img src="post-placeholder.jpg" alt="post 2"/>
                        </a>
                        <a href="/post-1-url" title="post 1" class="post-item-title">post 2</a>
                    </div>

                    <div class="post-description">
                        <h3>Ipsum dolor sit amet</h3>
                        <p>Nam accumsan nunc sit amet elementum sollicitudin.
                            Integer vel lacus eget tortor lobortis tincidunt sed eu dolor.
                            Phasellus cursus augue ac pulvinar cursus.</p>
                        <p>Quisque ut erat ornare, feugiat turpis a, fringilla felis.
                            Nulla molestie lorem et orci sagittis, et accumsan ex porta.</p>
                        <button class="button-hover" type="submit">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
