<?php

namespace Patterns\FactoryMethod\First;


abstract class CommsManager
{
    abstract function getHeaderText();

    abstract function getApptEncoder();

    abstract function getFooterText();
}