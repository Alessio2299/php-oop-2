<?php

  require_once __DIR__ . '/../../Products/Products.php';

  class Pesticides extends Products{
    protected $brand;
    protected $size;
    protected $disponibility;
    public function  __construct($_type, $_category, $_price, $_quantity, $_brand, $_size, $_cart){
      parent:: __construct($_type, $_category, $_price, $_quantity, $_cart);
      $this->brand = $_brand;
      $this->size = $_size;
      $this-> setDisponibility(date("m"));
    }

    public function setDisponibility($mounth){
      if($mounth == 10 || $mounth == 11 || $mounth == 12){
        return $this->disponibility = "Avalaible";
      } else{
        return $this->disponibility = "Product non Avalaible";
      }
    }
  }
