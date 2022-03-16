<?php
  require_once __DIR__ . '/Classes/Products/Products.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Foods.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Pesticides.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Games.php';
  require_once __DIR__ . '/Classes/Card/CreditCard.php';



  $foods = [];
  $foods[] = new Foods("Crocchette", "Foods", 5.99, 0, "Royal Canin", "Riso e Salmone", "High");
  $foods[] = new Foods("Bastoncini", "Foods", 1.10, 20, "Pedrigrex", "Meat", "Medium");

  $pesticides = [];
  $pesticides[]= new Pesticides("Antipulci" , "Pesticides", 3.20, 5, "FrontLine", "Small", "December");

  $games= [];
  $games[]= new Games("Palla", "Games", 1.99, 12, "Gomma");
  $games[]= new Games("Fune", "Games", 3.20, 8, "Corda");
  $games[]= new Games("Paperella", "Games", 2.50, 20, "Gomma");

  $card= new CrediCard(4032323487564, "Alessio", "Napoli", 9, 33);

  var_dump($card);
  var_dump($pesticides);
  var_dump($foods);
  var_dump($games);

  