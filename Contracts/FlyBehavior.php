<?php

/**
 * Interfece FlyBehavior 
 *
 * Интерфейс предназначен для описания типа полёта утки
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
 * Interfece class for create Ducks Fly Behavior
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

Interface FlyBehavior
{
    /**
     * Функция описывающая полет утки
     *
     * @return mixed
     */
    public function fly();
}

