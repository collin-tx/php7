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

$json = new JSON([
  'key' => 'value',
  'another_key' => 'value2'
  ]);
$xml = new XML();
$yml = new YAML();


// $json = new F\JSON();
// $xml = new F\XML();
// $yml = new F\YAML();

print_r("Namespaces");

print_r($json);
print_r($xml);
print_r($yml);

var_dump($json->convert());
var_dump(JSON::DATA);
var_dump(JSON::convertData());