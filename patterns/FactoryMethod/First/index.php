<?php

require_once getcwd() . '/vendor/autoload.php';

use Patterns\FactoryMethod\First\BloggsCommsManager;


$mgr = new BloggsCommsManager();
echo $mgr->getHeaderText();
echo $mgr->getApptEncoder()->encode();
echo $mgr->getFooterText();