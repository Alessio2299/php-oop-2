<?php

class Products{

  protected $type;
  protected $category;
  protected $price = 0;
  protected $quantity = 0;
  protected $discount = 0;

  public function __construct($_type, $_category){
    $this->type = $_type;
    $this->category = $_category;
  }
}