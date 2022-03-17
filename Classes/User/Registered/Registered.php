<?php
  require_once __DIR__ . '/../User.php';
  class Registered{

    public $sale = 20;
    public $registered = true;
    protected $name;
    protected $lastname;
    protected $username;
    protected $creditCard;

    public function __construct($_username, $_name, $_lastname, $_creditCard){
      $this->name = $_name;
      $this->lastname = $_lastname;
      $this->username = $_username;
      $this->creditCard = $_creditCard;
    }
  }