<?php require("blocks/header.php"); ?>
    
    <main>
        <h1>Hello</h1>
        <?php
            define('DB_HOST', 'std-1971.ist.mospolytech.ru'); //Адрес
            define('DB_USER', 'std'); //Имя пользователя
            define('DB_PASSWORD', 'root1234'); //Пароль
            define('DB_NAME', 'std_1971_lab5'); //Имя БД
            $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            echo $mysqli->host_info;
         

            $result = mysqli_query($mysql, "SELECT * FROM `images`");
            echo $result;
        ?>

        <div class="content">
            <img src="img/img_1.JPG" alt="1">
            <img src="img/img_2.JPG" alt="2">
            <img src="img/back.jpg" alt="3">
        </div>
        
    </main>

<?php require("blocks/footer.php") ?>