<?php

declare(strict_types=1);

interface drinkInterface
{
    public function drinkName(): string;

    public function serve(string $size, array $extras): string;
}