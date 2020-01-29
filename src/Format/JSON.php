<?php

namespace App\Format;

use App\Format\BaseFormat;

class JSON extends BaseFormat{

  public function convert()
  {
    return json_encode($this->data);
    // return parent::convert();
  }

}