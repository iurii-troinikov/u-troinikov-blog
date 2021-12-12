<?php

declare(strict_types=1);

function catalogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name' => 'Summer holidays',
            'url' => 'summer-holidays',
            'posts' => [1, 2, 3]
             ],
        2 => [
            'category_id' => 2,
            'name' => 'Winter holidays',
             'url' => 'winter-holidays',
            'posts' => [4, 5, 6]
            ],
        3 => [
             'category_id' => 3,
             'name' => 'All holidays',
             'url' => 'all-holidays',
             'posts' => [2, 4, 6]
            ],
        ];
}

function catalogGetPost(): array
{
    return [
        1 => [
            'post_id'  => 1,
            'name'        => 'Post 1',
            'url'         => 'post-1',
            'description' => 'Post 1 Description',
        ],
        2 => [
            'post_id'  => 2,
            'name'        => 'Post 2',
            'url'         => 'post-2',
            'description' => 'Post 2 Description',
        ],
        3 => [
            'post_id'  => 3,
            'name'        => 'Post 3',
            'url'         => 'post-3',
            'description' => 'Post 3 Description',
        ],
        4 => [
            'post_id'  => 4,
            'name'        => 'Post 4',
            'url'         => 'post-4',
            'description' => 'Post 4 Description',
        ],
        5 => [
            'post_id'  => 5,
            'name'        => 'Post 5',
            'url'         => 'post-5',
            'description' => 'Post 5 Description',
        ],
        6 => [
            'post_id'  => 6,
            'name'        => 'Post 6',
            'url'         => 'post-6',
            'description' => 'Post 6 Description',
        ],
    ];
}

function catalogGetCategoryPost(int $categoryId): array
{
    $categories = catalogGetCategory();
    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID $categoryId does not exists");
    }

    $postsForCategory = [];
    $posts = catalogGetPost();

    foreach ($categories[$categoryId]['posts'] as $postId) {
        if (!isset($posts[$postId])) {
            throw new InvalidArgumentException("Post with ID $postId from category $categoryId does not exists ");
        }
        $postsForCategory[] = $posts[$postId];
    }

        return $postsForCategory;
    }

    function catalogGetCategoryByUrl(string  $url): ?array
    {
        $data = array_filter(
            catalogGetCategory(),
            static function ($category) use ($url)
            {
                return $category['url'] === $url;
            }
        );

        return array_pop($data);
    }

function catalogGetPostByUrl(string  $url): ?array
{
    $data = array_filter(
        catalogGetPost(),
        static function ($post) use ($url)
        {
            return $post['url'] === $url;
        }
    );

    return array_pop($data);
}








