<?php

  class User{

    public $registered = false;
    protected $creditCard;
    public $sale = 0;

    public function __construct($_registered,$_creditCard,  $_username = "UNKNOWN", $_name = "UNKNOWN", $_lastname = "UNKNOWN", $_email = "UNKNOWN", $_password = "UNKNOWN"){
      $this->registered = $_registered;
      if($this->registered){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->username = $_username;
        $this->sale = 20;
        $this->email = $_email;
        $this->password = hash("md5",$_password);
        
      }else{
        $this->sale = 0;
      }
      $this->creditCard = $_creditCard;
    }
  }