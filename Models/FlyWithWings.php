<?php

/**
 * Class FlyWithWings 
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

use Contracts\FlyBehavior;

/**
 * Класс реализующий интерфейс FlyBehavior
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

class FlyWithWings implements FlyBehavior
{
    /**
     * Функция описывающая полет утки
     *
     * @return void
     */
    public function fly()
    {
        echo "<br>Летающая утка!!!<br>\n";
    }
}

