<?php

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class). '.php';
});

$pref = Preferences::getInstance();
$pref->setProperty('name', 'Lin');

unset( $pref );

$pref2 = Preferences::getInstance();
print $pref2->getProperty('name') . "\n";