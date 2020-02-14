<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

print_r(nl2br("Reflections\n\n"));

$data = [
    "name" => "John",
    "surname" => "Doe"
];


$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);

$formats = [
  $json, $xml, $yml
];


$class = new ReflectionClass(JSON::class);
var_dump($class);
$method = $class->getConstructor();
var_dump($method);
$parameters = $method->getParameters();
var_dump($parameters);

print_r(nl2br("\n\n\n\n"));

foreach($parameters as $p){
  $type = $p->getType();
  var_dump((string)$type);
  var_dump($type->isBuiltin());
}