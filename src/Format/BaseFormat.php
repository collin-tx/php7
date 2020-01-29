<?php 

namespace App\Format;

class BaseFormat {
  
  protected $data;

  public function __construct($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function convert()
  {
    return "I ain't doing shit dawg";
  }

  public function __toString()
  {
    return $this->convert();
  }


}


?>