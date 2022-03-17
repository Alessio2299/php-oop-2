<?php

  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Foods.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Pesticides.php';
  require_once __DIR__ . '/Classes/Products/CategeroryProduct/Toys.php';
  require_once __DIR__ . '/Classes/Card/CreditCard.php';
  require_once __DIR__ . '/Classes/User/NotRegistered/NotRegistered.php';
  require_once __DIR__ . '/Classes/User/Registered/Registered.php';
  require_once __DIR__ . '/Classes/Cart/Cart.php';


  $foods = [];
  $foods[] = new Foods("Crocchette", "Foods", 8.99, 0, "Royal Canin", "Riso e Salmone", "High", true);
  $foods[] = new Foods("Bastoncini", "Foods", 1.10, 20, "Pedrigrex", "Meat", "Medium", false);

  $pesticides = [];
  $pesticides[]= new Pesticides("Collare Antipulci" , "Pesticides", 3.20, 5, "FrontLine", "Small", true);
  $pesticides[]= new Pesticides("Shampoo Antipulci" , "Pesticides", 5.20, 3, "Retinol Complex", "Medium", false);  


  $toys= [];
  $toys[]= new Toys("Palla", "Toys", 1.99, 12, "Gomma", false);
  $toys[]= new Toys("Fune", "Toys", 3.20, 8, "Corda", false);
  $toys[]= new Toys("Paperella", "Toys", 2.50, 20, "Gomma", true);

  $card= new CrediCard(4032323475642, "Alessio", "Napoli", "08-09-2022", 333);


  $userRegistered= new Registered("Alessio2299", "Alessio", "Napoli", $card);

  $userNotRegistered= new NotRegistered($card);

  
  $prodotti= array_merge($foods,$pesticides,$toys);


  $ProductsCart= [];
  $total = 0;

  foreach($prodotti as $prodotto){
    if($prodotto->cart == true){
      $ProductsCart[]= $prodotto;
      $total += $prodotto->price;
    }
  }

  $cart =new Cart($userRegistered, $ProductsCart, $total);


  echo "<h2>Prodotti</h2>";
  var_dump($prodotti);
  echo "<h2>Utente Registrato</h2>";
  var_dump($userRegistered);
  echo "<h2>Utente Non Registrato</h2>";
  var_dump($userNotRegistered);
  echo "<h2>Carta di Credito</h2>";
  var_dump($card);
  echo "<h2>Carrello Utente</h2>";
  var_dump($cart);

