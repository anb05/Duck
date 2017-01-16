<?php

/**
 * Class Duck 
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

use Contracts\FlyBehavior;
use Contracts\QuackBehavior;

/**
 * Abstract class for create Ducks
 * Содзаём имитатор утки
 *
 * @category Learn
 *
 * @package Duck
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license MIT <mit@example.com>
 *
 * @link hhttps://github.com/anb05/Duck.git
 */

abstract class Duck
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
     * Конструктор класса
     *
     * @return void
     */
    public function __construct()
    {
        // пока пустой
    }

    /**
     * Абстрактная функция отображения данных
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
        echo "<br>Все, без исключения, утки плавают, даже муляжи.<br>\n";
    }

    /**
     * Метод для изменения полёта утки
     *
     * @param FlyBehavior $fly set behaviors fly
     *
     * @return FlyBehavior
     */
    public function setFlyBehavior(FlyBehavior $fly)
    {
        $this->flyBehavior = $fly;
    }

    /**
     * Метод для изменения голосовых свойств утки
     *
     * @param QuackBehavior $quack set behaviors quack
     *
     * @return QuackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quack)
    {
        $this->quackBehavior = $quack;
    }
}

