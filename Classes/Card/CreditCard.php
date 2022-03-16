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

      $this-> setExpiryCard($_expiryCard);

      if(is_numeric($_codeCVV) && strlen($_codeCVV) == 3){
        $this->codeCVV = $_codeCVV;
      } else{
        $this->codeCVV = "Code CVV not Valid";
      }

    }
    
    public function setExpiryCard($_expiryCard){
      $this->expiryCard = explode("-",$_expiryCard);
      if($this->expiryCard[0] > date("d") && $this->expiryCard[1] >= date("m") && $this->expiryCard[2] >= date("Y")){
        return $this->expiryCard = $_expiryCard;
      } elseif($this->expiryCard[0] < date("d") && $this->expiryCard[1] > date("m") && $this->expiryCard[2] >= date("Y")){
        return $this->expiryCard = $_expiryCard;
      } elseif($this->expiryCard[0] < date("d") && $this->expiryCard[1] <= date("m") && $this->expiryCard[2] > date("Y")){
        return $this->expiryCard = $_expiryCard;
      } else{
        return $this->expiryCard = "Expiry Card";
      }
    }
  }