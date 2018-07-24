<?php

namespace Patterns\Composite\Second;


/**
 * Class TroopCarrier
 *
 * Боевая единица(элемент) - транспортно-десантный самолет
 *
 * @package Patterns\Composite\Second
 */
class TroopCarrier extends CompositeUnit
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