<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iurii Troinikov Blog</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }
        .post-list {
            display: flex;
        }
        .post-list .post {
            max-width: 30%;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="Iurii Troinikov Blog">
        <img src="logo.jpg" alt="Blog logo" width="200"/>
    </a>
    <nav>
        <ul>
            <?php foreach (catalogGetCategory() as $category) : ?>
                <li>
                    <a href="/<?php echo $category['url']?>"><?= $category['name']?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
<main>
    <section title="Posts">
        <h1><?= $data['name'] ?></h1>
        <div class="post-list">
            <?php foreach (catalogGetCategoryPost($data['category_id']) as $post) : ?>
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
</main>
<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>
    <p>© Iurii Troinikov 2021. All Rights Reserved.</p>
</footer>
</body>
</html>
