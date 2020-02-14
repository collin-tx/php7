<?php

require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;
use App\Serializer;

print_r(nl2br("Dependency Injection\n\n"));

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$serializer = new Serializer(new XML());
var_dump($serializer->serialize($data));


// $json = new JSON($data);
// $xml = new XML($data);
// $yml = new YAML($data);

// $formats = [
//   $json, $xml, $yml
// ];
