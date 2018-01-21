<?php

class Sea
{
    /**
     * @var int Судоходность
     */
    private $navigability = 0;

    public function __construct($navigability)
    {
        $this->navigability = $navigability;
    }
}
class EarthSea extends Sea {}
class MarsSea extends Sea {}

class Plains {}
class EarthPlains extends Plains {}
class MarsPlains extends Plains {}

class Forest {}
class EarthForest extends Forest {}
class MarsForest extends Forest {}



class TerrainFactory
{
    private $sea;
    private $plains;
    private $forest;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    public function getSea(): Sea
    {
        return clone $this->sea;
    }


    public function getPlains(): Plains
    {
        return clone $this->plains;
    }


    public function getForest(): Forest
    {
        return clone $this->forest;
    }
}

$factory = new TerrainFactory(new EarthSea(-1), new EarthPlains(), new EarthForest());

print_r($factory->getSea());
print_r($factory->getPlains());
print_r($factory->getForest());



// Хотите, чтобы игра происходила на новой планете с морями и лесами. как на Земле, и с равнинами, как на Марсе

$factory = new TerrainFactory(new EarthSea(-1), new MarsPlains(), new EarthForest());
