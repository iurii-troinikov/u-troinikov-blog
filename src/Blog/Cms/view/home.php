<?php
/** @var \Blog\Framework\View\Renderer $this */
?>
<section class="welcome-section">
    <div class="content-wrapper">
        <div class="content">
            <div class="welcome-section-title">
                <h1>Welcome to my Blog!</h1>
                <h2>Here you will find a lot of interesting things!</h2>
            </div>
            <div class="welcome-section-items">
                <!-- 1 -->
                <div class="welcome-section-item">
                    <div class="welcome-section-item-image"></div>
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolore illo nisi optio
                        repudiandae? Architecto cumque exercitationem, facilis minima nesciunt nisi recusandae tempora
                        voluptas.</p>
                </div>
                <!-- 2 -->
                <div class="welcome-section-item">
                    <div class="welcome-section-item-image"></div>
                    <h3>Lorem ipsum dolor</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, tempora voluptate? A dolor earum
                        eveniet excepturi fugit incidunt laudantium magni maiores, veniam?</p>
                </div>
                <!-- 3 -->
                <div class="welcome-section-item">
                    <div class="welcome-section-item-image"></div>
                    <h3>Lorem ipsum dolor</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur cum debitis
                        distinctio dolorem eius est hic ipsum molestiae natus omnis porro sit.</p>
                </div>
            </div>
            <a href="javascript: void(0)" class="read-more-btn button-hover">
                Read More
            </a>
        </div>
    </div>
</section>

<?= $this->render(\Blog\Catalog\Block\Post\RecentlyViewed::class) ?>

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
