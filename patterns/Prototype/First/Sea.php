<?php

namespace Patterns\Prototype\First;


/**
 * Class Sea
 * @package Patterns\Prototype\First
 */
class Sea
{
    /**
     * @var int Судоходность
     */
    private $navigability = 0;

    /**
     * Sea constructor.
     * @param int $navigability
     */
    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }
}