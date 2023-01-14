<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_js.css">
    <script type="text/javascript" src="main_js.js"></script>
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
	<!-- main -->
	<div class="header-down">	
	<!-- div class="elements" -->
        <div class="calc-pic">
            <img src="calc.png" height="500px">
        </div>
        <div class="calc-container" id="calc-container">
            <div class="screen" id="screen">
            <textarea id="out_screen" rows="5" cols="33" wrap="soft" onclick="paste()" disabled></textarea>
            <span></span>
            </div>
            <div class="buttons" id="buttons">
                <div class="digits" id="digits">
                        <button class="key_digit" id="d_1" value="1">1</button>
                        <button class="key_digit" id="d_2" value="2">2</button>
                        <button class="key_digit" id="d_3" value="3">3</button>
                        <button class="key_digit" id="d_4" value="4">4</button>
                        <button class="key_digit" id="d_5" value="5">5</button>
                        <button class="key_digit" id="d_6" value="6">6</button>
                        <button class="key_digit" id="d_7" value="7">7</button>
                        <button class="key_digit" id="d_8" value="8">8</button>
                        <button class="key_digit" id="d_9" value="9">9</button>
                        <button class="key_digit" id="d_c" value=".">.</button>
                        <button class="key_digit" id="d_0" value="0">0</button>
                        <button class="key" style="visibility: hidden;" id="b_hidden" value=""></button>
                    </div>
                    <div class="other" id="other" >
                        <button class="key_operation" id="o_a" value="+">+</button>
                        <button class="key_clear_1" id="b_c_all" value="C">C</button>
                        <button class="key_bracket" id="b_l" value="(">(</button>
                        <button class="key_bracket" id="b_r" value=")">)</button>
                        <button class="key_operation" id="o_d" value="/">/</button>
                        <button class="key_operation" id="o_m" value="*">*</button>
                        <button class="key_operation" id="o_s" value="-">-</button>
                        <button class="key_result" id="bt_r" value="=">=</button>
                        <button class="key_clear_2" id="b_c_one" value="CE">CE</button>
                    </div>
            </div>
        </div>
	</div>
    <!-- /main -->
    
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
