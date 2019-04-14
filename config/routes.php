<?php

return array(
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
    'news' => 'news/index',
    'news/page-([0-9]+)' => 'news/index/$1',

    'products/([a-z]+)/([0-9]+)' => 'products/view/$1/$2',
    'products' => 'products/list',

    ''=>'site/index'
);