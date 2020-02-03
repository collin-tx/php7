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

$data = [
    "name" => "John",
    "surname" => "Doe"
];


$json = new JSON();
var_dump(convertData($json));