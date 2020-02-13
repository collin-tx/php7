<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

print_r(nl2br("Anonymous Functions\n\n"));

function convertData(BaseFormat $format) {
  return $format->convert();
}

function getFormatName(NamedFormatInterface $format){
  return $format->getName();
}

function getFormatByName(array $formats, string $name): BaseFormat {
  foreach ($formats as $format) {
    if ($format instanceof NamedFormatInterface && $format->getName()){
      return $format;
    }
  }
  return null;
}

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


function findByName(string $name, array $formats): ?BaseFormat {
  $found = array_filter($formats, function($format) use ($name) {
    return $format->getName() === $name;
  });

  if (count($found)) {
    return reset($found);
  }

  return null;
}

var_dump(findByName('ap[s9df', $formats));