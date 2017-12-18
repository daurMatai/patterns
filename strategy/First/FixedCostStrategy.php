<?php
namespace First;

class FixedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return 30;
    }

    function chargeType()
    {
        return "Фиксированая ставка";
    }
}