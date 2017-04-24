<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

require_once __DIR__.'/../vendor/autoload.php';

use Factory\ProductFactory;
use Silex\Application;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;

$database = json_decode(file_get_contents(__DIR__.'/../etc/database.json'), true);
$productsArray = [];
foreach ($database['products'] as $productProperties) {
    $productsArray[$productProperties['identifier']] = $productProperties;
}

$templating = new PhpEngine(new TemplateNameParser(), new FilesystemLoader(__DIR__.'/../templates/%name%'));
$productFactory = new ProductFactory(PropertyAccess::createPropertyAccessor());

$app = new Application([
    'debug' => true,
]);
$app
    ->get('/', function () use ($app, $productsArray, $productFactory, $templating) {
        $products = [];
        foreach ($productsArray as $productProperties) {
            $products[] = $productFactory->createProductFromPropertyArray($productProperties);
        }

        return $templating->render('index.html.php', ['products' => $products]);
    })
;
$app
    ->get('/product/{identifier}', function ($identifier) use ($app, $productsArray, $productFactory, $templating) {
        $product = $productFactory->createProductFromPropertyArray($productsArray[$identifier]);

        return $templating->render('product.html.php', ['product' => $product]);
    });
;

$app->run();
