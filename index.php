<?php

require_once 'vendor/autoload.php';

use CowSay\Cow;

$cowsay = new Cow();
echo $cowsay->say("Hello from the cow!");
