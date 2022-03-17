<?php

class Cart{

  protected $user;
  protected $productsCart;
  protected $total;
  protected $sale;

  public function __construct($_user,$_productsCart, $_total){
    $this->setUser($_user);
    $this->productsCart = $_productsCart;
    $this->setSale();
    $this->setTotal($_total);
  }
  public function setUser($_user){
    return $this->user = $_user;
  }
  public function setSale(){
    return $this->sale = $this->user->sale;
  }
  public function setTotal($_total){
    if($this->user->registered){
      $this->total = $_total * 0.80;
    } else{
      $this->total = $_total;
    }
  }
}