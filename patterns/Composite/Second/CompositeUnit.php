<?php

namespace Patterns\Composite\Second;


/**
 * Class CompositeUnit
 *
 * Класс для компонованых юнитов
 *
 * @package Patterns\Composite\Second
 */
abstract class CompositeUnit extends Unit
{
    /**
     * @var array С боевыми единицами Unit
     */
    private $units = array();

    /**
     * @return $this
     */
    public function getComposite(): self
    {
        return $this;
    }

    /**
     * @return array units
     */
    protected function units(): array
    {
        return $this->units;
    }

    /**
     * @param Unit $unit
     */
    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, array($unit), function ($a, $b) {
            return ($a === $b) ? 0 : 1;
        });
    }

    /**
     * @param Unit $unit
     */
    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }
        $this->units[] = $unit;
    }
}