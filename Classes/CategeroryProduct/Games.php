<?php

  require_once __DIR__ . '/../Products.php';

  class Games extends Products{
    public function __construct($_type, $_category, $_price, $_quantity){
      parent::__construct($_type, $_category);
      $this->price = $_price;
      $this->quantity = $_quantity;
    }
  }
