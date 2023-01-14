
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php require "title.php"; ?>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-line">
            <h1>Моя страница</h1> 
            
                <!-- a class="nav-item" href="index.php">Главная</a -->
                <a class="nav-item" href="<?php	

                    $name='Главная'; 
                    $link='index.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>

                <a class="nav-item" href="#contact">Контакты</a>
                <!-- a class="nav-item" href="@">Достижения</a -->
                <a class="nav-item" href="<?php	

                    $name='Достижения'; 
                    $link='achievements.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>
		<a class="nav-item" href="index_js.php">Калькулятор</a>
                <!-- a class="autorization" href="autorization.php">Авторизация</a -->

                <a class="autorization" href="<?php	

                    $name='Авторизация'; 
                    $link='autorization.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>
           
        </div>
    </div>    
</div>
    
<div class="header-down">
    <div class="spisok">
        <?php require "spisok.php"; ?>
    </div>
    <div class="person">
<?php
    include "dbconnect.php";
    $sql = mysqli_query($conn, 'SELECT * FROM `images`');

        while ($result = mysqli_fetch_array($sql)) {
	?>
           
              <img height='200' title="<?php echo $result['name'];?>" src="img/<?php echo $result['img'];?>" />
       <?php }
     ?>
    </div>
</div>
    
<div class="footer">
    <div class="header-line">
        <p class="foot" id = "email">Почта: olga.boyunova@gmail.com</p>
        <p class="foot" id = "contact">Телефон: 89778010143</p>

        <a class="nav" href="<?php	

                    $name='Обратная связь'; 
                    $link='feedback.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>


        <!-- a class="nav" href="feedback.php">Обратная связь</a -->
        <p class="foot" id = "date"><?php require "date.php"; ?></p>
    </div>   
</div>
</body>  
</html>