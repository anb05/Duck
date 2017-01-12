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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
 */ 

namespace Contracts;

/**
 * Interfece class for create Ducks Fly Behavior
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

Interface FlyBehavior
{
    /**
     * Функция описывающая полет утки
     *
     * @return mixed
     */
    public function fly();
}

