<?php

/**
 * Class MuteQuack 
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

namespace Models;

use Contracts\QuackBehavior;

/**
 * Класс реализующий интерфейс QuackBehavior
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

class MuteQuack implements QuackBehavior
{
    /**
     * Функция описывающая кряканье утки
     * Реализует типы уток не издающие звуков
     *
     * @return void
     */
    public function quack()
    {
        echo "<br>Тишина!!!<br>\n";
    }
}

