<?php

namespace Patterns\Composite\Second;


/**
 * Class Army
 *
 * Боевая единица(элемент) - Армия
 *
 * @package Patterns\Composite\Second
 */
class Army extends CompositeUnit
{
    /**
     * @inheritdoc
     * @return int
     */
    function bombardStrength(): int
    {
        $ret = 0;

        foreach ($this->units() as $unit) {
            /* @var $unit Unit */
            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}