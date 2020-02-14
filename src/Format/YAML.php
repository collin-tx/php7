<?php

namespace App\Format;

use App\Format\BaseFormat;

class YAML extends BaseFormat
implements NamedFormatInterface,
FormatInterface {
  
  public function convert(): string
  {
    $result = '';

    foreach($this->data as $key => $value){
      $result .= $key.': '.$value."\n";
    }
    return htmlspecialchars($result);
  }

  public function getName()
  {
    return 'YML';
  }

}