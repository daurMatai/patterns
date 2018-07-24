<?php

namespace Patterns\Composite\Second;


/**
 * Class LaserCannon
 *
 * Боевая единица(элемент) - Лазерная пушка
 *
 * @package Patterns\Composite\Second
 */
class LaserCannon extends Unit
{
    /**
     * @inheritdoc
     * @return int
     */
    function bombardStrength(): int
    {
        return 44;
    }
}