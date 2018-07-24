<?php

require_once getcwd() . '/vendor/autoload.php';

use Patterns\Prototype\First\TerrainFactory;
use Patterns\Prototype\First\EarthSea;
use Patterns\Prototype\First\EarthPlains;
use Patterns\Prototype\First\EarthForest;
use Patterns\Prototype\First\MarsPlains;


$factory = new TerrainFactory(new EarthSea(-1), new EarthPlains(), new EarthForest());

print_r($factory->getSea());
print_r($factory->getPlains());
print_r($factory->getForest());

// Хотите, чтобы игра происходила на новой планете с морями и лесами. как на Земле, и с равнинами, как на Марсе

$factory = new TerrainFactory(new EarthSea(-1), new MarsPlains(), new EarthForest());
