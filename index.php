<?php

/**
 * Learn Design Patterns 
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Duck
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license MIT <mit@example.com>
 *
 * @link https://github.com/anb05/Duck.git
 */ 

use Models\MallardDuck;
use Models\ModelDuck;
use Models\FlyRocketPowered;

echo "<br>Запуск скрипта<br>\n";

require_once __DIR__ . "/Generals/myHelper.php";

$mallard = new MallardDuck();

$mallard->display();
$mallard->performQuack();
$mallard->performFly();

//var_dump($mallard);

echo "<br><br><h1>Реактивная утка</h1>\n";

$modelDuck = new ModelDuck();
$modelDuck->display();

echo "<br>Определяем способности утки к полёту<br>\n";
$modelDuck->performFly();

echo "<br>Определяем голосовые возможности утки<br>\n";
$modelDuck->performQuack();

echo "<br>Переопределяем способности утки к полёту<br>\n";
$modelDuck->setFlyBehavior(new FlyRocketPowered());
$modelDuck->performFly();
