<?php

declare(strict_types=1);

class BananaSmoothie implements drinkInterface
{
    private $name;
    private $ingredients;

    public function __construct()
    {
        $this->name = "Banana Smoothie";
        $this->ingredients = [
            "Bananas",
            "Milk",
            "Vanilla Extract"
        ];
    }

    public function drinkName(): string
    {
        return $this->name;
    }

    public function serve(string $size, array $extras): string
    {
        $ingredients = "";
        foreach ($this->ingredients as $ingredient) {
            $ingredients = $ingredients . ", " . $ingredient;
        }

        if (count($extras) == 0){
            return "Serving a " . $size . " " . $this->name . " made with". $ingredients . " and no extras" . "\n\n";
        }

        $extrasString = "";
        foreach ($extras as $key => $extra){
            if (count($extras) > 1){
                $extrasString = $extrasString . " and " . $extra;
            } else {
                $extrasString = " " . $extra;
            }
        }

        return "Serving a " . $size . " " . $this->name . " made with". $ingredients . " and extras of" . $extrasString ."\n\n";
    }
}