<?php

/**
 * Class Duc 
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
 * Abstract class for create Ducks
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

abstract class DucK
{
    /**
     * Объект типа полета утки
     *
     * @param object FlyBehavior
     */

    protected $flyBehavior;

    /**
     * Объект типа кряканья утки
     *
     * @param object QuackBehavior
     */

    protected $quackBehavior;

    /**
     * Абстрактная функция
     *
     * @return void
     */
    abstract public function display();

    /**
     * Функция описывающая полет утки
     *
     * @return void
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    /**
     * Функция описывающая кряканье утки
     *
     * @return void
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    /**
     * Функция описывающая умение утки плавать
     *
     * @return void
     */
    public function swim()
    {
        echo "<br>
            Все без исключения утки плавают,
            даже муляжи.
            <br>\n";
    }
}

