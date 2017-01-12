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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
 */ 

use Models\MallardDuck;

echo "<br>Запуск скрипта<br>\n";

require_once __DIR__ . "/Generals/myHelper.php";

$mallard = new MallardDuck();

$mallard->display();
$mallard->performQuack();
$mallard->performFly();

var_dump($mallard);
