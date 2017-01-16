<?php
/**
 * Learn Design Patterns 
 * Файл содержаший набор функций, обеспечивающих функционирование приложения:
 *     автозагрузку;
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

/**
 * Автозагрузчик классов
 *
 * @param string $class clss namespace
 *
 * @return string path to file class
 */
function autoload($class)
{
    $dirs = explode("\\", $class);
    $path = realpath(
        __DIR__ . DIRECTORY_SEPARATOR . 
        ".." . DIRECTORY_SEPARATOR . $dirs[0] . 
        DIRECTORY_SEPARATOR . $dirs[1] . ".php"
    );

    if (is_file($path)) {
        include_once $path;
    } else {
        echo "<br> ошибка, такого файла нет<br>\n";
    }
}

spl_autoload_register('autoload');

