<?php

namespace Patterns\Strategy\First;


/**
 * Class CostStrategy
 * @package Patterns\Strategy\First
 */
abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);

    abstract function chargeType();
}