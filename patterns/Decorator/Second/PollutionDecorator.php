<?php

namespace Patterns\Decorator\Second;


/**
 * Class PollutionDecorator
 *
 * Декоратор уровня загрезнения
 *
 * @package Patterns\Decorator\Second
 */
class PollutionDecorator extends TileDecorator
{
    /**
     * @inheritdoc
     *
     * В свойстве tile (Будь это Plains или DiamondDecorator либо другой объект имеющии тип Tile)
     * находится объект типа Tile.
     * Вызывается его метод getWealthFactor, который возвращает его доходность,
     * после чего прибавляется - 3, это то что дает Pollution.
     * Таким образом он и декорируется
     *
     * @return int
     */
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 3;
    }
}