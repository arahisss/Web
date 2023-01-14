<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="feedback_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <?php require "title.php"; ?>
</head>
    
<body>
  <div class="header">
    <div class="container">
        <div class="header-line">
            <h1 class="h">Моя страница</h1>
            
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
                <a class="nav-item" href="@">Достижения</a>
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
  <div class="body2">
     <div class="container2">
         <div class="content">
         <form action="home.php" method="post">
                <p><input type="text" name="fio" placeholder="ФИО" value="<?php if (isset($_GET['fio'])){
                        echo $_GET['fio']; }?>"/></p>
                <p><input type="text" name="email" placeholder="email" value="<?php if (isset($_GET['email'])){
                        echo $_GET['email']; }?>"/></p>
                <p><label><b>Откуда узнали про нас</b></label><br>
                <input type="radio" id="contactChoice1" name="source" value="1" <?php if (isset($_GET['source']) & $_GET['source']='1'){
                        echo 'checked';}?>/>
                <label for="contactChoice1">От друга</label>
                <input type="radio" id="contactChoice2" name="source" value="2" <?php if (isset($_GET['source']) & $_GET['source']='2'){
                        echo 'checked';}?>/>
                <label for="contactChoice2">Из интернета</label></p>
                <p><select size="1" name="category" style="width: 150px">
                <option disabled>Выберите опцию</option>
                <option value="1">Предложение</option>
                <option value="2">Жалоба</option></select></p>
                <p><textarea name="text" placeholder="Сообщение"></textarea></p>
                <p><input name="file" type="file"></p>
                <p><input type="checkbox">Даю согласие на обработку персональных данных</p>
                <input type="submit" value="Отправить" />
            </form>
         </div>
     </div>
    </div>

    <div class="footer">
      <div class="header-line">
          <p class="foot" id = "email">Почта: olga.boyunova@gmail.com</p>
          <p class="foot" id = "contact">Телефон: 89778010143</p>
          <!-- a class="nav" href="feedback.php">Обратная связь</a -->
          <a class="nav" href="<?php	

                    $name='Обратная связь'; 
                    $link='feedback.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>
          <p class="foot" id = "date"><?php require "date.php"; ?></p>
      </div>   
  </div>
</body>
</html>