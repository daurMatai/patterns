<?php

namespace Patterns\Composite\Second;


class UnitScript
{
    private static $comp;

    /**
     * @param Unit $newUnit
     * @param CompositeUnit|Unit $occupyingUnit
     * @return Army|TroopCarrier
     */
    static function joinExisting(Unit $newUnit, Unit $occupyingUnit)
    {
        if (!is_null(self::$comp = $occupyingUnit->getComposite())) {
            self::$comp->addUnit($newUnit);
        } else {
            self::$comp = new Army();
            self::$comp->addUnit($occupyingUnit);
            self::$comp->addUnit($newUnit);
        }

        return self::$comp;
    }
}