<?php

return [
    'production' => false,
    'baseUrl' => 'https://www.teslacharts.net',
    'site' => [
        'title' => 'Tesla Charts',
        'description' => 'Repository for all @TESLACharts charts about Tesla stock price, Tesla bonds, Tesla earnings, Tesla registrations, Model S and Model X sales, Tesla deliveries, etc.',
        'image' => 'tc.png',
    ],
    'owner' => [
        'name' => 'Tesla Charts',
        'twitter' => 'TESLAcharts'
    ],
    'services' => [
        'analytics' => 'UA-XXXXX-Y',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
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
            ? str_limit_soft(content_sanitize($page->getDescription()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
