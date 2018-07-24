<?php

namespace Patterns\Composite\Second;


/**
 * Class Unit
 *
 * Боевая единица(элемент)
 *
 * @package Patterns\Composite\Second
 */
abstract class Unit
{
    /**
     * @return null
     */
    public function getComposite()
    {
        return null;
    }

    /**
     * @return int Атакующая сила элемента
     */
    public abstract function bombardStrength();
}