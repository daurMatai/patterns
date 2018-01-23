<?php

use second\Plains;
use second\DiamondDecorator;
use second\PollutionDecorator;

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class). '.php';
});

//$tile = new Plains();

//$tile = new DiamondDecorator(new Plains());

$tile = new PollutionDecorator(new DiamondDecorator(new Plains()));


echo $tile->getWealthFactor();
