<?php

require_once getcwd() . '/vendor/autoload.php';

use Patterns\Decorator\Second\PollutionDecorator;
use Patterns\Decorator\Second\DiamondDecorator;
use Patterns\Decorator\Second\Plains;


//$tile = new Plains();

//$tile = new DiamondDecorator(new Plains());

$tile = new PollutionDecorator(new DiamondDecorator(new Plains()));

echo $tile->getWealthFactor();
echo "\n";