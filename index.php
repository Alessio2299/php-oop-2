<?php
  require_once __DIR__ . '/Classes/Products/Products.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Foods.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Pesticides.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Games.php';


  $foods = [];
  $foods[] = new Foods("Crocchette", "Foods", 5.99, 0, "Royal Canin", "Riso e Salmone", "High");
  $foods[] = new Foods("Bastoncini", "Foods", 1.10, 20, "Pedrigrex", "Meat", "Medium");

  $pesticides = [];
  $pesticides[]= new Pesticides("Antipulci" , "Pesticides", 3.20, 5);

  $games= [];
  $games[]= new Games("Palla", "Giochi", 1.99, 12);
  $games[]= new Games("Corda", "Giochi", 3.20, 8);
  $games[]= new Games("Paperella", "Giochi", 2.50, 20);

  var_dump($pesticides);
  var_dump($foods);
  var_dump($games);

  