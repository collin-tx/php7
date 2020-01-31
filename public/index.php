<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

print_r(nl2br("Interfaces\n\n"));

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);
// $base = new BaseFormat($data);

// var_dump($json);
// var_dump($xml);
// var_dump($yml);
// var_dump($base);


print_r(nl2br("\n\nResult of conversion\n\n"));
// var_dump($json->convert());
// var_dump($xml->convert());
// var_dump($yml->convert());
// var_dump($base->convert());

$formats = [$json, $xml, $yml];

foreach ($formats as $format){ 
  var_dump($format->convert());
  // var_dump($format instanceof FromStringInterface);
  // var_dump(get_class($format));
  
  var_dump($format->getName());
  if ($format instanceof FromStringInterface){
    print_r(nl2br("\n\nConverted from string!\n\n"));

  var_dump($format->convertFromString('{"name": "John", "surname": "Wilson"}'));
  }
}



// var_dump($json->convertFromString('{"name": "John", "surname": "Wilson"}'));