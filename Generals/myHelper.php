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
 * @author A.Bovkun <a.n.bovkn@gmail.com>
 *
 * @license MIT <mit@example.com>
 *
 * @link http://localhos/index.php Изучаем паттерны
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

