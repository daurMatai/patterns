<?php

namespace second;

class Plains extends Tile
{
    private $wealth_factor = 2;

    public function getWealthFactor()
    {
        return $this->wealth_factor;
    }
}