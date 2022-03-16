<?php

  require_once __DIR__ . '/../../Products/Products.php';

  class Pesticides extends Products{
    protected $brand;
    protected $size;
    protected $disponibility;
    public function  __construct($_type, $_category, $_price, $_quantity, $_brand, $_size, $_disponibility){
      parent:: __construct($_type, $_category, $_price, $_quantity);
      $this->brand = $_brand;
      $this->size = $_size;
      $this-> setDisponibility($_disponibility);
    }

    public function setDisponibility($mounth){
      if($mounth == "December" || $mounth == "November"){
        return $this->disponibility = "Avalaible";
      } else{
        return $this->disponibility = "Product non Avalaible";
      }
    }
  }
