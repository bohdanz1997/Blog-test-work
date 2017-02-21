<?php

$routes = [
    '/' => ['handler' => ['MainController','index']],
    '/categories' => ['handler' => ['CategoryController','index']],

    /********  Article  ********/
    '/articles' => [
        'handler' => ['ArticleController','index'],
        'policy' => ['user']
    ],
    '/article' => [
        'handler' => ['ArticleController','show'],
        'policy' => 'user'
    ],
    '/create-comment' => [
        'handler' => ['CommentController', 'create'],
        'policy' => 'user'
    ],
    '/add-like-json' => [
        'handler' => ['ArticleController', 'like'],
        'policy' => 'user'
    ],

    /********    Admin      ********/
    '/create-article' => [
        'handler' => ['ArticleController','createArticle'],
        'policy' => 'admin'
    ],
    '/create-category' => [
        'handler' => ['CategoryController','createCategory'],
        'policy' => 'admin'
    ],
    '/comments' => [
        'handler' => ['AdminController','comments'],
        'policy' => 'admin'
    ],
    '/admin' => [
        'handler' => ['AdminController','index'],
        'policy' => 'admin'
    ],

    /******* Auth **********/
    '/login' => ['handler' => ['AuthController','login']],
    '/logout' => ['handler' => ['AuthController','logout']],
    '/registration' => ['handler' => ['AuthController','registration']],

];