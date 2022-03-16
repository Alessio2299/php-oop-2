<?php

  class CrediCard{

    protected $numberCard;
    protected $name;
    protected $surname;
    protected $expiryCard;
    protected $codeCVV;

    public function __construct($_numberCard, $_name, $_surname, $_expiryCard, $_codeCVV){
      
      if(is_numeric($_numberCard) && strlen($_numberCard) == 13){
        $this->numberCard = $_numberCard;
      }else{
        $this->numberCard = "Number Card not Valid";
      }
      $this->name = $_name;
      $this->surname = $_surname;

      if($_expiryCard > 3){
        $this->expiryCard = $_expiryCard;
      } else {
        $this->expiryCard = "Expired Card";
      }

      if(is_numeric($_codeCVV) && strlen($_codeCVV) == 3){
        $this->codeCVV = $_codeCVV;
      } else{
        $this->codeCVV = "Code CVV not Valid";
      }
    }
  }