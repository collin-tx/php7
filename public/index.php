<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

print_r(nl2br("Typed Arguments & Return types\n\n"));

function convertData(BaseFormat $format) {
  return $format->convert();
}

function getFormatName(NamedFormatInterface $format){
  return $format->getName();
}

$data = [
    "name" => "John",
    "surname" => "Doe"
];


$json = new JSON();
$xml = new XML($data);
var_dump(convertData($json));
var_dump(getFormatName($xml));
var_dump($xml->convert());