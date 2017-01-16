<?php

/**
 * Class FlyRocketPowered
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

class FlyRocketPowered implements FlyBehavior
{
    /**
     * Функция описывающая полет искуственной утки
     *
     * @return void
     */
    public function fly()
    {
        echo "<br>Эта утка летает на реактивной тяге (как ракета)!!!<br>\n";
    }
}

