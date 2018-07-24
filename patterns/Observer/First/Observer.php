<?php

namespace Patterns\Observer\First;


interface Observer
{
    public function update($temp, $humidity, $pressure);
}