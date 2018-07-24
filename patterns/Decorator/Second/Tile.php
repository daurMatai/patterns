<?php

namespace Patterns\Decorator\Second;


/**
 * Class Tile
 *
 * Квадрат(клетка) в котором может находится боевая единица
 *
 * @package Patterns\Decorator\Second
 */
abstract class Tile
{
    /**
     * Возвращает доход что приносит данный квадрат когда на нем нходится боевая единица
     *
     * @return int
     */
    public abstract function getWealthFactor();
}