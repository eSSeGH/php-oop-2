<?php

require_once __DIR__."/./models/product.php";
require_once __DIR__."/./models/food.php";
require_once __DIR__."/./models/game.php";
require_once __DIR__."/./models/shelter.php";

// creo l'istanza della categoria gatto
$gatto = new Category("gatto","<i class='fa-solid fa-cat'></i>");

// creo l'istanza della categoria cane
$cane = new Category("cane","<i class='fa-solid fa-dog'></i>");

// creo 2 istanze della classe Food

$food1_ingredients = array('pesce azzurro','salmone');
$food1 = new Food($gatto, 'food1', 1.49, 2, '123456789012345', '2024-04-04', $food1_ingredients);

$food2_ingredients = array('manzo','vitello');
$food2 = new Food($cane, 'food2', 2.19, 2, '023425873982144', '2025-05-05', $food2_ingredients);

// pusho i food in un array dedicato

$foods = [$food1, $food2];

// creo 2 istanze della classe Game

$game1_materials = ['plastica','cartone'];
$game1 = new Game($gatto, 'game1', 15.99, 43, '598473945293462', 'NE', $game1_materials);

$game2_materials = ['acciaio','plastica'];
$game2 = new Game($cane, 'game2', 21.99, 7, '999954623423441', 'BI', $game2_materials);

// pusho i game in un array dedicato

$games = [$game1, $game2];

// creo 2 istanze della classe Shelter

$shelter1 = new Shelter($gatto, 'shelter1', 39.99, 14, '000003450345234', 'NE', 0.5, 0.3, 0.5);

$shelter2 = new Shelter($cane, 'shelter2', 44.99, 5, '111111190238427','BI', 0.5, 0.4, 0.9);

// pusho gli shelter in un array dedicato

$shelters = [$shelter1, $shelter2];

// unisco tutti gli array in un array generale products
$products = array_merge($foods, $games, $shelters);


?>