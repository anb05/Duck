<?php

/**
 * Class Quack 
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

use Contracts\QuackBehavior;

/**
 * Класс реализующий интерфейс QuackBehavior
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

class Quack implements QuackBehavior
{
    /**
     * Функция описывающая кряканье утки
     * Обычная крякающая утка
     *
     * @return void
     */
    public function quack()
    {
        echo "<br>Кря - Кря - Кря !!!<br>\n";
    }
}

