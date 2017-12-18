<?php
namespace First;

class TimedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return ( $lesson->getDuration() * 5 );
    }

    function chargeType()
    {
        return "Почасовая оплата";
    }
}