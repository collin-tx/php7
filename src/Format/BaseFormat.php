<?php 

namespace App\Format;

abstract class BaseFormat {
  
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

  public abstract function convert();
  // {
  //   return "I ain't doing shit dawg";
  // } -- abstract methods can't have a body

  public abstract function convertFromString();
  
  public function __toString()
  {
    return $this->convert();
  }


}


?>