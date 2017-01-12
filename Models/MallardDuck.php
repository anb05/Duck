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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
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

