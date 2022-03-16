<?php

class Products{

  protected $type;
  protected $category;
  protected $price = 0;
  protected $quantity = 0;

  public function __construct($_type, $_category, $_price, $_quantity){
    $this->type = $_type;
    $this->category = $_category;

    $this->setPriceOrQuantity("price", $_price, "Free");
    $this->setPriceOrQuantity("quantity", $_quantity, "Product not available");
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