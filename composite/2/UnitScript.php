<?php

class UnitScript
{
    private static $comp;

    /**
     * @param Unit $newUnit это объект, вновь прибывший на клетку
     * @param CompositeUnit|Unit $occupyingUnit объект, который занимал клетку до этого
     * @return $this|Army|null
     */
    static function joinExisting(Unit $newUnit, Unit $occupyingUnit)
    {
        if (is_null(self::$comp = $occupyingUnit->getComposite())) {
            self::$comp->addUnit($newUnit);
        } else {
            self::$comp = new Army();
            self::$comp->addUnit($occupyingUnit);
            self::$comp->addUnit($newUnit);
        }
        return self::$comp;
    }
}