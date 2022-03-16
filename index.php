<?php

  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Foods.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Pesticides.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Games.php';
  require_once __DIR__ . '/Classes/Card/CreditCard.php';
  require_once __DIR__ . '/Classes/User/NotRegistered/NotRegistered.php';
  require_once __DIR__ . '/Classes/User/Registered/Registered.php';




  $foods = [];
  $foods[] = new Foods("Crocchette", "Foods", 8.99, 0, "Royal Canin", "Riso e Salmone", "High");
  $foods[] = new Foods("Bastoncini", "Foods", 1.10, 20, "Pedrigrex", "Meat", "Medium");

  $pesticides = [];
  $pesticides[]= new Pesticides("Collare Antipulci" , "Pesticides", 3.20, 5, "FrontLine", "Small");
  $pesticides[]= new Pesticides("Shampoo Antipulci" , "Pesticides", 5.20, 3, "Retinol Complex", "Medium");  


  $games= [];
  $games[]= new Games("Palla", "Games", 1.99, 12, "Gomma");
  $games[]= new Games("Fune", "Games", 3.20, 8, "Corda");
  $games[]= new Games("Paperella", "Games", 2.50, 20, "Gomma");

  $card= new CrediCard(4032323475642, "Alessio", "Napoli", "08-09-2022", 333);


  $userRegisterd= [];
  $userRegisterd[]= new Registered("Alessio2299", "Alessio", "Napoli", $card);

  $userNotRegistered= [];
  $userNotRegistered[]= new NotRegistered($card);


 
  var_dump($pesticides);
  var_dump($foods);
  var_dump($games);
  var_dump($card);
  var_dump($userRegisterd);
  var_dump($userNotRegistered);


  