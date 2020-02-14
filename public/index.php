<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Service\Serializer;
use App\Controller\IndexController;
use App\Container;

print_r(nl2br("Simple Service Container\n\n"));

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$serializer = new Serializer(new JSON());
$controller = new IndexController($serializer);
var_dump($controller->index());

$container = new Container();

$container->addService('format.json', function() use ($container){
  return new JSON();
});

$container->addService('format', function() use ($container){
  $container->getService('format.json');
});
var_dump($container);