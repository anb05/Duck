<?php

/**
 * Class ModelDuck 
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
 * Class for create ModelDuck
 * Содзаём имитатор искуственной утки
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

class ModelDuck extends Duck
{
    /**
     * Конструктор класса
     *
     * @return void
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior   = new FlyNoWay();
    }

    /**
     * Абстрактная функция отображения данных
     *
     * @return void
     */
    public function display()
    {
        echo "<br>Создана искуственная утка (муляж)<br>\n";
    }
}

