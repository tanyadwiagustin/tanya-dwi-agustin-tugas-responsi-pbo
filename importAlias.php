<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use data\satu\Conflict as Conflict1;
use data\dua\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;