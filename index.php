<?php

require("./autoload.php");

use Observer\Observer;
use Observer\EventSource;
use Observer\UserData;


$eventSource = new EventSource();

$userData1 = new UserData("Sina");
$userData2 = new UserData("Mohammad");

$eventSource->addObserver($userData1);
$eventSource->addObserver($userData2);


$eventSource->setData("Sina Developer");