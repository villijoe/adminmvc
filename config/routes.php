<?php
return array(
    'books/process' => 'books/process',
    'books/finished' => 'books/finished',
    'books/([0-9]+)' => 'books/view/$1',
    'books' => 'books/index',
    'games/process' => 'games/process',
    'games/finished' => 'games/finished',
    'games/([0-9]+)' => 'games/view/$1',
    'games' => 'games/index',
    'deals/add' => 'deals/add',
    'deals/process' => 'deals/process',
    'deals/finished' => 'deals/finished',
    'deals/([0-9]+)' => 'deals/view/$1',
    'deals' => 'deals/index',
    'adminmvc' => 'site/index',
);