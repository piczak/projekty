<?php

require_once __DIR__.'vendor/autoload.php';

use Services\Render;

$renderService = new Render();
$renderService->test2(__DIR__.'/views');
?>