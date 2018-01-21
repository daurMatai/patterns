<?php

class Army extends CompositeUnit
{
    function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units() as $unit) {
            /* @noinspection PhpUndefinedMethodInspection */
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}