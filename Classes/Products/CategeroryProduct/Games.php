<?php

  require_once __DIR__ . '/../../Products/Products.php';

  class Games extends Products{
    
    protected $material;
    public function  __construct($_type, $_category, $_price, $_quantity, $_material){
      parent:: __construct($_type, $_category, $_price, $_quantity);
      $this->material = $_material;
    }
  }
