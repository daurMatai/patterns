<?php

namespace Patterns\Decorator\Second;


/**
 * Class DiamondDecorator
 *
 * Декоратор уровня алмазов
 *
 * @package Patterns\Decorator\Second
 */
class DiamondDecorator extends TileDecorator
{
    /**
     * @inheritdoc
     *
     * В свойстве tile (Будь это Plains или PollutionDecorator либо другой объект имеющии тип Tile)
     * находится объект типа Tile.
     * Вызывается его метод getWealthFactor, который возвращает его доходность,
     * после чего прибавляется + 2, это то что дает Diamond.
     * Таким образом он и декорируется
     *
     * @return int
     */
    public function getWealthFactor(): int
    {
        /**
         * @var $this->tile Tile
         */
        return $this->tile->getWealthFactor() + 2;
    }
}