<?php

require_once __DIR__ . '/vendor/autoload.php';

use Test\PrintTest;

$printTest = new PrintTest();
$printTest->send();
$printTest->page();

$db = new mysqli();