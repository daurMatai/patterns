<?php

namespace Patterns\FactoryMethod\First;


class BloggsApptEncoder extends ApptEncoder
{
    function encode() : string
    {
        return "Данные о встрече закодированы в формате BloggsCall \n";
    }
}