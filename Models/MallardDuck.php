<?php

/**
 * Class MullardDuck 
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

use Models\Duck;

/**
 * Class for create MallardDuck
 * Содзаём имитатор дикой утки
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

class MallardDuck extends Duck
{
    /**
     * Конструктор класса
     *
     * @return void
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior   = new FlyWithWings();
    }

    /**
     * Абстрактная функция отображения данных
     *
     * @return void
     */
    public function display()
    {
        echo "<br>Создана дикая утка<br>\n";
    }
}

