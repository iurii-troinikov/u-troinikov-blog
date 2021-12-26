<?php

require_once '../src/data.php';

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
        <img src="logo.jpg" alt="Blog Logo" width="200"/>
    </a>
    <nav>
        <ul>
            <?php foreach (catalogGetCategory() as $categoryData) : ?>
                <li>
                    <a href="/<?php echo $categoryData['url']?>"><?= $categoryData['name']?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
<main>
    <?php require_once "../src/pages/$page" ?>
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
