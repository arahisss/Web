<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="main_js.js" defer></script>
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
		<a class="nav-item" href="calc.php">Калькулятор</a>
                
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
	<body>
    	<main>
        <div class="calc-container">
            <div class="screen">
                <span></span>
            </div>
            <div class="buttons">
                <div class="digits">
                    <button class="key digit">7</button>
                    <button class="key digit">8</button>
                    <button class="key digit">9</button>
                    <button class="key digit">4</button>
                    <button class="key digit">5</button>
                    <button class="key digit">6</button>
                    <button class="key digit">1</button>
                    <button class="key digit">2</button>
                    <button class="key digit">3</button>
                    <button class="key digit">0</button>
                    <button class="key digit">.</button>
                    <button class="key" style="visibility: hidden;"></button>
                </div>
                <div class="other">
                    <button class="key operation">+</button>
                    <button class="key operation">-</button>
                    <button class="key operation">*</button>
                    <button class="key operation">/</button>
                    <button class="key bracket">(</button>
                    <button class="key bracket">)</button>
                    <button class="key result">=</button>
                    <button class="key clear">C</button>
                </div>
            </div>
        </div>
    </main>
</body>

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