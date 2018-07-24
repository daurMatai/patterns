<?php

namespace Patterns\Prototype\First;


/**
 * Class TerrainFactory
 * @package Patterns\Prototype\First
 */
class TerrainFactory
{
    /**
     * @var Sea
     */
    private $sea;

    /**
     * @var Plains
     */
    private $plains;

    /**
     * @var Forest
     */
    private $forest;

    /**
     * TerrainFactory constructor.
     * @param Sea $sea
     * @param Plains $plains
     * @param Forest $forest
     */
    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    /**
     * @return Sea
     */
    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    /**
     * @return Plains
     */
    public function getPlains(): Plains
    {
        return clone $this->plains;
    }

    /**
     * @return Forest
     */
    public function getForest(): Forest
    {
        return clone $this->forest;
    }
}