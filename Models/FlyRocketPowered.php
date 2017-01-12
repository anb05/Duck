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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
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

