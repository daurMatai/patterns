<?php

namespace Patterns\Decorator\Second;


/**
 * Class Plains
 *
 * Квадрат(клетка) - Равнина
 *
 * @package Patterns\Decorator\Second
 */
class Plains extends Tile
{
    /**
     * @var int Доход от этой месности
     */
    private $wealth_factor = 2;

    /**
     * @inheritdoc
     * @return int
     */
    public function getWealthFactor(): int
    {
        return $this->wealth_factor;
    }
}