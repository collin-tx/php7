<?php

require __DIR__.'/../vendor/autoload.php';

// use App\Format;
// use App\Format as F;
use App\Format\{JSON,XML,YAML};
// use App\Format\JSON;
// use App\Format\XML;
// use App\Format\YAML;

// $json = new App\Format\JSON();
// $xml = new App\Format\XML();
// $yml = new App\Format\YAML();

// $json = new F\JSON();
// $xml = new F\XML();
// $yml = new F\YAML();

print_r("INHERITANCE \n\n");

$data = [
  'name' => 'John',
  'surname' => 'Doe'
];

$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);

var_dump($json);
var_dump($xml);
var_dump($yml);

print_r("\n\n RESULT OF CONVERSION \n\n");
var_dump($json->convert());
$xml->setData([
  'key1' => 'dis da xml',
  'key2' => 'knowtamene'
]);
$yml->setData([
  'key1' => 'dis da YAAMMMLLL',
  'key2' => 'YAAAA'
]);
var_dump($xml->convert());
var_dump($yml->convert());
