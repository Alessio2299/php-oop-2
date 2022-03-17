<?php

  require_once __DIR__ . '/../../Products/Products.php';

  class Toys extends Products{
    
    protected $material;
    public function  __construct($_type, $_category, $_price, $_quantity, $_material, $_cart){
      parent:: __construct($_type, $_category, $_price, $_quantity, $_cart);
      $this->material = $_material;
    }
  }
