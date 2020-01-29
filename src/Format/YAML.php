<?php

namespace App\Format;

use App\Format\BaseFormat;

class YAML extends BaseFormat {
  
  public function convert()
  {
    $result = '';

    foreach($this->data as $key => $value){
      $result .= $key.': '.$value."\n";
    }
    return htmlspecialchars($result);
  }

}