<?php


require_once __DIR__ . '/../vendor/autoload.php';

require_once(__DIR__ . '/index.logging.php');

use Lento\{LentoApi, Env, OpenAPI, Cache};
use Lento\Database\ORM;
use Lento\Renderer;

date_default_timezone_set('Europe/Berlin');

Env::load(__DIR__);
Cache::setCacheDirectory(__DIR__ . '/../cache')
    ::setPublicDirectory(__DIR__ . '/../public');

Renderer::configure([
    'directory' => 'Website/Views',
    'layout' => '_Layout'
]);

ORM::configure('sqlite:./database.sqlite');

OpenAPI::configure([]);
OpenApi::enable()
    ::addTags([
        ['products', 'Bakery products'],
        ['orders', 'Manage orders'],
        ['customers', 'Manage customers'],
    ]);
/* or single tag per call
::addTag('products', 'Bakery products')
::addTag('orders', 'Manage orders')
::addTag('customers', 'Manage customers');*/

new LentoApi([
    Bakery\Website\Home\HomeController::class,
    Bakery\Controllers\CustomersController::class,
    Bakery\Controllers\OrdersController::class,
    Bakery\Controllers\ProductsController::class,
])->run();
