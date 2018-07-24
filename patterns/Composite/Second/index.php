<?php

require_once getcwd() . '/vendor/autoload.php';

use Patterns\Composite\Second\Army;
use Patterns\Composite\Second\Archer;
use Patterns\Composite\Second\LaserCannon;
use Patterns\Composite\Second\UnitScript;


$army = new Army();
$archer = new Archer();
$laser = new LaserCannon();

//echo 'result - ' . UnitScript::joinExisting($laser, $army)->bombardStrength();
echo 'result - ' . UnitScript::joinExisting($laser, $archer)->bombardStrength();
echo "\n";