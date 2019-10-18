<?php

return [
    'production' => false,
    'baseUrl' => 'https://artisan-static-demo.netlify.com',
    'site' => [
        'title' => 'Tesla Charts',
        'description' => 'Official Tesla Charts depository, with comments from the $TSLAQ legend himself.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Tesla Charts',
        'twitter' => 'TESLAcharts'
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
    ],
    'collections' => [
        'charts' => [
            'path' => 'charts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
