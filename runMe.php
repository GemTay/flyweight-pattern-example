<?php
require("drinkInterface.php");
require_once("DrinkFactory.php");
require("Espresso.php");
require("BananaSmoothie.php");
require ("Cappuccino.php");

echo "\n\n\n";
$factory = new DrinkFactory();
$factory->listDrinks();

$largeEspresso = $factory->getDrink("Espresso");
echo $largeEspresso->serve("large", ["caramel syrup"]);

$smallEspresso = $factory->getDrink("Espresso");
echo $smallEspresso->serve("small", ["caramel syrup"]);

$mediumSmoothie = $factory->getDrink("Banana Smoothie");
echo $mediumSmoothie->serve("medium", ["whipped cream"]);

$smallCappuccino = $factory->getDrink("Cappuccino");
echo $smallCappuccino->serve("small", []);

$smallSmoothie = $factory->getDrink("Banana Smoothie");
echo $smallSmoothie->serve("small", ["chocolate sprinkles"]);

$largeCappuccino = $factory->getDrink("Cappuccino");
echo $largeCappuccino->serve("large", ["vanilla syrup"]);

$factory->listDrinks();
