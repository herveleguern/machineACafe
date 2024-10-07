<?php
require_once 'machineACafe.php';
require_once 'cafe.php';
require_once 'expresso.php';
require_once 'macchiato.php';

$mc=new MachineACafe();

echo "niveaux ",$mc,PHP_EOL;

echo "servir un expresso:",PHP_EOL;
$mc->prepare(new Expresso());
echo "niveaux ",$mc,PHP_EOL;

echo "servir un macchiato:",PHP_EOL;
$mc->prepare(new Macchiato());
echo "niveaux ",$mc,PHP_EOL;

?>