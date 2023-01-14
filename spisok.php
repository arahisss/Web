<?php
include "dbconnect.php";
// Выводим результат из БД
$sql = mysqli_query($conn, 'SELECT * FROM `Определение`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<dl>'.'<dt>' .$result['Термин'].'</dt>'.'<dd>'. $result['Определение'].'</dd>'.'</dl>';
  }

/*
<?php

$array = array(
	'Список выполненных заданий:',
	'Лабораторная работа 1',
	'Шапка с меню (навигация по разделам)',
	'Футер с контактной информацией/копирайтом',
	'Фотография и/или другие изображения',
    'Таблица',
    'Подключён шрифт с Google Fonts',
    'Лабораторная работа 2',
    'Фрма для аутентификации',
    'Форма обратной связи',
);

echo '<h2>' . $array[0] . '</h2>
<ol><li><i>' . $array[1] . '</i>
<ul><li>' .     implode('</li>
<li>', array_slice($array, 2, 5)) . '</li></ul></li>

<li><i>' . $array[7] . '</i><ul><li>' . 
    implode('</li>
<li>', array_slice($array, 6, 8)) . '</li></ul></li></ol>';

*/

?>