<?php

/**
 * Class FlyWithWings 
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

namespace Models;

/**
 * Класс реализующий интерфейс FlyBehavior
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

class FlyWithWings implements QuackBehavior
{
    /**
     * Функция описывающая полет утки
     *
     * @return mixed
     */
    public function fly()
    {
        echo "<br>Летающая утка!!!<br>\n";
    }
}

