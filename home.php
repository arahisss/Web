<?php
    require("blocks/header.html")
?>


<?php
   
    echo '<p> Здравствуйте, '. $_POST['name'].'</p>'; // выводим ФИО
    if ($_POST['category'] == 'propose') { // проверяем тип обращения
         echo '<p>Спасибо за ваше предложение:</p>';
         echo '<textarea cols="30" rows="10">'.$_POST['message'].'</textarea>'; // вывод текста сообщения
    }
    else {
         echo '<p>Мы рассмотрим Вашу жалобу:</p>';
         echo '<textarea>'.$_POST['message'].'</textarea>';
    }

    if (isset($_POST['file-input']) & isset($_POST['file-input']) != '') {
        echo '<p>Вы приложили следующий файл: ' . $_POST['file-input'].'</p>';
    }
    else {
        echo 'Вы не приложили файл';
    }
  
    
    echo '<a class="fill_again" href="index.php?N='.$_POST['name'].'&E='.$_POST['email'].'&S='.$_POST['source'].'">Заполнить снова</a>';


?>

