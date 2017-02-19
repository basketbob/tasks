<?php
/**
 * Created by PhpStorm.
 * User: vlkuzin vladimir.s.kuzin@gmail.com
 * Date: 18/2/17
 * Time: 14:32
 */
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', '');
define('DB_NAME', '');