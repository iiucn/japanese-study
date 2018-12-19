<?php

use IEcho\Common;

require __DIR__ . '/../vendor/autoload.php';

isset($_GET['c']) || ($_GET['c'] = 'Index');
$controller = 'IEcho\Controller\\' . $_GET['c'];
isset($_GET['a']) || ($_GET['a'] = 'index');
$action = $_GET['a'];

$c = new $controller();
$c->$action();
