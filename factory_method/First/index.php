<?php

spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class). '.php';
});

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();