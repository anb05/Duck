<?php

/**
 * Interfece QuackBehavior 
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

namespace Contracts;

/**
 * Интерфейс для описания кряканья утки
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

Interface QuackBehavior
{
    /**
     * Функция описывающая кряканье утки
     *
     * @return mixed
     */
    public function quack();
}

