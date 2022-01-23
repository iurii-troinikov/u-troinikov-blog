<?php

declare(strict_types=1);

use Blog\Framework\Database\Adapter\MySQL;

return [
    \Blog\Framework\Database\Adapter\AdapterInterface::class => DI\get(
        MySQL::class
    ),
    MySQL::class => DI\autowire()->constructorParameter(
        'connectionParams',
        [
            MySQL::DB_NAME     => 'iuriit_blog',
            MySQL::DB_USER     => 'iuriit_blog_user',
            MySQL::DB_PASSWORD => '45Ya!$""sT&P*C%RNSEhr',
            MySQL::DB_HOST     => 'mysql',
            MySQL::DB_PORT     => '3306'
        ]
    ),
    \Blog\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            \DI\get(\Blog\Cms\Router::class),
            \DI\get(\Blog\Catalog\Router::class),
            \DI\get(\Blog\ContactUs\Router::class),
            \DI\get(\Blog\Install\Router::class)
        ]
    )
];
