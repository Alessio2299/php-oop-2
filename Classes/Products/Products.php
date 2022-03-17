<?php

class Products{

  protected $type;
  protected $category;
  public $price = 0;
  protected $quantity = 0;
  public $cart;

  public function __construct($_type, $_category, $_price, $_quantity, $_cart){
    $this->type = $_type;
    $this->category = $_category;

    $this->setPriceOrQuantity("price", $_price, "Free");
    $this->setPriceOrQuantity("quantity", $_quantity, "Product not available");
    $this->cart = $_cart;

  }
  public function setPriceOrQuantity($property, $n, $message){
    if(is_numeric($n) && $n != 0){
      return $this->$property = $n;
    }elseif(($n == 0) && is_numeric($n)){
      return $this->$property = $message;
    }else{
      return $this->$property = "Contact the shop";
    }
  }
}