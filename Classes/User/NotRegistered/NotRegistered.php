<?php
  require_once __DIR__ . '/../User.php';
  class NotRegistered{

    public $registered = false;
    public $sale = 0;
    protected $creditCard;

    public function __construct($_creditCard){
      $this->creditCard = $_creditCard;
    }
  }