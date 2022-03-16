<?php
  require_once __DIR__ . '/Classes/Products.php';
  require_once __DIR__ . '/Classes/CategeroryProduct/Foods.php';
  require_once __DIR__ . '/Classes/CategeroryProduct/Pesticides.php';
  require_once __DIR__ . '/Classes/CategeroryProduct/Games.php';


  $products = [];
  $products[] = new Products("antipulci", "medicine");
  $products[] = new Products("palla", "giochi");
  $products[] = new Products("corda", "giochi");
  $products[] = new Products("paperella", "giochi");


  $foods = [];
  $foods[] = new Foods("crocchette", "foods", 5.99, 50 );
  $foods[] = new Foods("bastoncini di carne", "foods", 1.10, 20);

  

  var_dump($products);
  var_dump($foods);
  