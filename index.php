<?php

$is_auth =      rand(0, 1);
$user_name =    'serg';
// $user_name =    htmlspecialchars($user_name);

$page_title = 'Название страницы';
$categories =   [   
    [
        'title' => 'Доски и лыжи',
        'code'  => '',
    ],
    [
        'title' => 'Крепления',
        'code'  => '',
    ],
    [
        'title' => 'Ботинки',
        'code'  => '',
    ],
    [
        'title' => 'Одежда',
        'code'  => '',
    ],
    [
        'title' => 'Инструменты',
        'code'  => '',
    ],
    [
        'title' => 'Разное',
        'code'  => '',
    ],
];

$items =    [
    [   
        'title' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' =>    10999,
        'url_img' => 'img/lot-1.jpg',
    ],
    [   
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' =>    159999,
        'url_img' => 'img/lot-2.jpg',
    ],
    [   
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' =>    8000,
        'url_img' => 'img/lot-3.jpg',
    ],
    [   
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' =>    10999,
        'url_img' => 'img/lot-4.jpg',
    ],
    [   
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' =>    7533.123,
        'url_img' => 'img/lot-5.jpg',
    ],
    [   
        'title' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'url_img' => 'img/lot-6.jpg',
    ],
];

function price_format($x) {
    $x = ceil($x);
    if ($x > 1000) {
        $x = number_format($x, 0, '', ' ');
    } 
    return $x . ' ₽';
};


require('helpers.php');

$main = include_template('main.php', ['categories' => $categories, 'items' => $items,  ]);

$layout = include_template('layout.php', ['categories' => $categories, 'user_name' => $user_name, 'is_auth' => $is_auth, 'page_title' => $page_title, 'main' => $main, ]);

print($layout);
