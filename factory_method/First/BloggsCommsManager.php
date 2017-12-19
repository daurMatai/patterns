<?php

class BloggsCommsManager extends CommsManager
{
    /**
     * @return string
     */
    function getHeaderText() : string
    {
        return "Bloggs Call верхний колонтитул \n";
    }

    /**
     * @return ApptEncoder
     */
    function getApptEncoder() : ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    /**
     * @return string
     */
    function getFooterText() : string
    {
        return "BloggsCall нижний колонтитул \n";
    }
}