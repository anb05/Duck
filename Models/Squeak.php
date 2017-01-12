<?php

/**
 * Class Squeak
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
 * Класс для кряканья резиновой утки
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

class Squeak implements QuackBehavior
{
    /**
     * Кряканье резиновой утки
     * Звуки издающие искуственной уткой
     *
     * @return void
     */
    public function quack()
    {
        echo "<br>Писк!!!<br>\n";
    }
}

