<?php

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class). '.php';
});

$army = new Army();
$archer = new Archer();
$laser = new LaserCannon();

var_dump(UnitScript::joinExisting($laser, $army)->bombardStrength());