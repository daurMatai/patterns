<?php

namespace Patterns\Decorator\Second;


/**
 * Class TileDecorator
 *
 * Абстрактный класс для декораторов
 *
 * @package Patterns\Decorator\Second
 */
abstract class TileDecorator extends Tile
{
    /**
     * @var Tile Декорируемая клетка
     */
    protected $tile;

    /**
     * TileDecorator constructor.
     * @param Tile $tile
     */
    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}