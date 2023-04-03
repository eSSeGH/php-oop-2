<?php

require_once __DIR__."/./models/product.php";
require_once __DIR__."/./models/food.php";
require_once __DIR__."/./models/game.php";
require_once __DIR__."/./models/shelter.php";

// creo l'istanza della categoria gatto
$gatto = new Category;
$gatto->setType("gatto");
$gatto->setImg("<i class='fa-solid fa-cat'></i>");

// creo l'istanza della categoria cane
$cane = new Category;
$cane->setType("cane");
$cane->setImg("<i class='fa-solid fa-dog'></i>");

// creo 2 istanze della classe Food

$food1 = new Food($gatto);
$food1->setName('food1');
$food1->setPrice(1.49);
$food1->setStock(2);
$food1->setCode('123456789012345');
$food1->setExpiry_date('2024-04-04');
$food1_ingredients = ['pesce azzurro','salmone'];
$food1->setIngredients($food1_ingredients);

$food2 = new Food($cane);
$food2->setName('food2');
$food2->setPrice(2.19);
$food2->setStock(2);
$food2->setCode('023425873982144');
$food2->setExpiry_date('2025-05-05');
$food2_ingredients = ['manzo','vitello'];
$food2->setIngredients($food2_ingredients);

$foods = [$food1, $food2];

// creo 2 istanze della classe Game

$game1 = new Game($gatto);
$game1->setName('game1');
$game1->setPrice(15.99);
$game1->setStock(2);
$game1->setCode('598473945293462');
$game1->setColor('NE');
$game1_materials = ['plastica','cartone'];
$game1->setMaterials($game1_materials);

$game2 = new Game($cane);
$game2->setName('game2');
$game2->setPrice(21.99);
$game2->setStock(2);
$game2->setCode('999954623423441');
$game2->setColor('BI');
$game2_materials = ['acciaio','plastica'];
$game2->setMaterials($game2_materials);

$games = [$game1, $game2];

// creo 2 istanze della classe Shelter

$shelter1 = new Shelter($gatto);
$shelter1->setName('shelter1');
$shelter1->setPrice(39.99);
$shelter1->setStock(2);
$shelter1->setCode('000003450345234');
$shelter1->setColor('NE');
$shelter1->setHeight(0.5);
$shelter1->setWidth(0.3);
$shelter1->setDepth(0.5);



$shelter2 = new Shelter($cane);
$shelter2->setName('shelter2');
$shelter2->setPrice(44.99);
$shelter2->setStock(2);
$shelter2->setCode('111111190238427');
$shelter2->setColor('BI');
$shelter2->setHeight(0.5);
$shelter2->setWidth(0.4);
$shelter2->setDepth(0.9);


$shelters = [$shelter1, $shelter2];

$products = array_merge($foods, $games, $shelters);


?>