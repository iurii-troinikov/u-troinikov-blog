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
        <img src="logo.jpg" alt="Blog Logo" width="200"/>
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

    <!-- @TODO: Implement recently viewed products -->

    <section title="Recently Viewed Posts">
        <h2>Recently Viewed Posts</h2>
        <div class="post-list">
            <div class="post">
                <a href="/post-1-url" title="Post 1">
                    <img src="/post-placeholder.jpg" alt="Post 1" width="200"/>
                </a>
                <a href="/post-1-url" title="Post 1">Post 1</a>
                <button type="button">Read</button>
            </div>
            <div class="post">
                <a href="/post-2-url" title="Post 2">
                    <img src="/post-placeholder.jpg" alt="Post 2" width="200"/>
                </a>
                <a href="/post-2-url" title="Post 2">Post 2</a>
                <button type="button">Read</button>
            </div>
            <div class="post">
                <a href="/post-3-url" title="Post 3">
                    <img src="/post-placeholder.jpg" alt="Post 3" width="200"/>
                </a>
                <a href="/post-3-url" title="Post 3">Post 3</a>
                <button type="button">Read</button>
            </div>
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
