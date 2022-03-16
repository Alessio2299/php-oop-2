<?php

  require_once __DIR__ . '/../../Products/Products.php';

  class Foods extends Products{
    protected $brand;
    protected $ingrediants = [];
    protected $quality;
    public function  __construct($_type, $_category, $_price, $_quantity, $_brand, $_ingrediants, $_quality){
      parent:: __construct($_type, $_category, $_price, $_quantity);
      $this->brand = $_brand;
      $this->ingrediants = $_ingrediants;
      $this->quality = $_quality;

    }
  }
