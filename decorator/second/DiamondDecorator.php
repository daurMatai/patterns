<?php

namespace second;

class DiamondDecorator extends TileDecorator
{

    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}