<?php
  require_once __DIR__ . '/Classes/Products/Products.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Foods.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Pesticides.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Games.php';


  $foods = [];
  $foods[] = new Foods("crocchette", "foods", 5.99, 50 );
  $foods[] = new Foods("bastoncini di carne", "foods", 1.10, 20);

  $pesticides = [];
  $pesticides[]= new Pesticides("antipulci" , "pesticides", 3.20, 5);

  $games= [];
  $games[]= new Games("palla", "giochi", 2.70, 12);
  $games[]= new Games("corda", "giochi", 3.20, 8);
  $games[]= new Games("paperella", "giochi", 2.50, 20);

  var_dump($pesticides);
  var_dump($foods);
  var_dump($games);

  