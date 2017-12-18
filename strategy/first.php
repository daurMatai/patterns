<?php

use First\Seminar;
use First\Lecture;
use First\TimedCostStrategy;
use First\FixedCostStrategy;

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class). '.php';
});

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Плата за занятие " . $lesson->cost()  . "\n";
    print "Тип оплаты " . $lesson->chargeType()  . "\n";
}