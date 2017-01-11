<?php

/**
 * Interfece QuackBehavior 
 *
 * PHP version 7.0.1
 *
 * @category Learn
 *
 * @package Duc
 *
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
 */ 

namespace Contracts;

/**
 * Интерфейс для описания кряканья утки
 *
 * @category Learn
 *
 * @package Duc
 *
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
 */

Interface QuackBehavior
{
    /**
     * Функция описывающая кряканье утки
     *
     * @return mixed
     */
    public function quack();
}

