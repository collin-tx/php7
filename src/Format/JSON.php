<?php

namespace App\Format;

use App\Format\BaseFormat;

class JSON extends BaseFormat 
    implements FromStringInterface,
    NamedFormatInterface {

  public function convert()
  {
    return json_encode($this->data);
    // return parent::convert();
  }

  public function convertFromString($string)
  {
    return json_decode($string, true);
  }

  public function getName()
  {
    return 'JSON';
  }

}