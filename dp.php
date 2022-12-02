<?php 
    define('DB_HOST', 'std-1971.ist.mospolytech.ru'); //Адрес
    define('DB_USER', 'std'); //Имя пользователя
    define('DB_PASSWORD', 'root1234'); //Пароль
    define('DB_NAME', 'std_1971_lab5'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>
