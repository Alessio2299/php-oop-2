<?php

  class User{

    protected $creditCard;
    protected $sale = 0;

    public function __construct($_creditCard, $_sale){
      
      $this->creditCard = $_creditCard;

      if(is_numeric($_sale)){
        $this->sale = $_sale;
      }
    }
  }