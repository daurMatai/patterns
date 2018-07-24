<?php

require_once getcwd() . '/vendor/autoload.php';

use Patterns\Singleton\First\Preferences;


$pref = Preferences::getInstance();
$pref->setProperty('name', 'Daur');

unset( $pref );

$pref2 = Preferences::getInstance();
echo $pref2->getProperty('name') . "\n";