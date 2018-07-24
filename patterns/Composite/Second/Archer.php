<?php

namespace Patterns\Composite\Second;


/**
 * Class Archer
 *
 * Боевая единица(элемент) - Лучник
 *
 * @package Patterns\Composite\Second
 */
class Archer extends Unit
{
    /**
     * @inheritdoc
     * @return int
     */
    function bombardStrength(): int
    {
        return 4;
    }
}