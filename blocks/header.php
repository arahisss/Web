<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    
    <?php 
    $title = "Аверкова Карина 211-361 ЛР № 5";
    ?>
    <title><?php echo($title);?></title>
    
</head>

<body>   
<script>
    onload = function () {
    for (var lnk = document.links, j = 0; j < lnk.length; j++)
        if (lnk [j].href == document.URL & lnk[j].className != "header__logo") 
            
            lnk [j].style.cssText = 'opacity: 1;border-bottom: 2px solid #ffffff;';

    }
</script>
 

    <section class="section">
        <div class="container">
            <header class="header">
                <a class="header__logo" href="index.php">Lab5</a>

                <nav class="nav">
                    
                    <a class="nav__link" href="index.php">Главная</a>
                    <a class="nav__link" href="#">Контакты</a>
                    <a class="nav__link" href="#">Обратная связь</a>
                    <a class="login-button" href="auth.php">Войти</a>
                    
                </nav>
            </header>