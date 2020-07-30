<?php

declare(strict_types=1);

class DrinkFactory
{
    private $drinkCache;
    public $drinksCreated = 0;

    public function __construct()
    {
        $this->drinkCache = [];
    }

    public function getDrink(string $drinkKey)
    {
        $drink = null;

        if (array_key_exists($drinkKey, $this->drinkCache)) {
            echo "Reusing existing flyweight object for " . $drinkKey . "\n\n";
            return $this->drinkCache[$drinkKey];
        } else {
            echo "Creating new flyweight object for " . $drinkKey . "\n\n";
            switch($drinkKey)
            {
                case "Espresso":
                    $drink = new Espresso();
                    break;
                case "Banana Smoothie":
                    $drink = new BananaSmoothie();
                    break;
                case "Cappuccino":
                    $drink = new Cappuccino();
                    break;
                default:
                    throw new Exception("This is not a flyweight drink object");
            }
        }

        $this->drinkCache[$drinkKey] =  $drink;
        $this->drinksCreated++;

        return $drink;
    }

    public function listDrinks()
    {
        echo "Factory has " . count($this->drinkCache) . " drink objects ready to use\n\n";
        echo "Number of objects created: " . $this->drinksCreated . "\n\n";
    }

}