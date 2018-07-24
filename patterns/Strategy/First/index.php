<?php

require_once getcwd() . '/vendor/autoload.php';

use Patterns\Strategy\First\Seminar;
use Patterns\Strategy\First\TimedCostStrategy;
use Patterns\Strategy\First\Lecture;
use Patterns\Strategy\First\FixedCostStrategy;


$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    /* @var $lesson \Patterns\Strategy\First\Lesson */
    echo 'Плата за занятие ' . $lesson->cost()  . "\n";
    echo 'Тип оплаты ' . $lesson->chargeType()  . "\n";
}