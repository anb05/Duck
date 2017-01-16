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
 * @author anb05 <alexandr05@list.ru>
 *
 * @license MIT <mit@example.com>
 *
 * @link https://github.com/anb05/Duck.git
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
 * @author anb05 <alexandr05@list.ru>
 *
 * @license MIT <mit@example.com>
 *
 * @link https://github.com/anb05/Duck.git
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

