<?php

namespace App\Format;

use App\Format\BaseFormat;

class JSON extends BaseFormat implements FromStringInterface{

  public function convert()
  {
    return json_encode($this->data);
    // return parent::convert();
  }

}