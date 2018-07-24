<?php

class Mocha extends CondimentDecorator
{
    public $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}