<?php
  require_once __DIR__ . '/../User.php';
  class NotRegistered{

    protected $sale = 0;
    protected $creditCard;

    public function __construct($_creditCard){
      $this->creditCard = $_creditCard;
    }
  }