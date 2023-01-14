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
    
<div class="header-down">
    <div class="spisok">
         <script>                   
		function pow(a, b) {
  			let result = a;
  			for (let i = 1; i < b; i++) {
    				result *= a;
  			}
  		return result;
		}
		let res = pow(2, 3);
		alert(`Возведение 2 в степень 3: ${res}`);


		function NOD (a, b) {
			if (b == 0) {return a;}
    			else {return NOD(b, a % b);}
		}
		res = NOD(6, 10);
		alert(`Наибольший общий делитель 6 и 10: ${res}`);


		function Min(n){
    			var min=9;

    			while (n>0){
 				if (n%10<min) min = n%10;
      				n = Math.floor(n/10);
    			}

    		return 'Наименьшая цифра: '+min+'';
		}
		alert(Min(11));

                function pluralize(n, was){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if ((n != 11) && (n1 == 1)) {
                        return was[1];
                    }
                    return was[0];
                }
                answer = pluralize(1, ['было найдено', 'была найдена']);
		function declOfNum(n, text_forms) {  
    			n = Math.abs(n) % 100; 
    			var n1 = n % 10;
    			if (n > 10 && n < 20) { return text_forms[2]; }
    			if (n1 > 1 && n1 < 5) { return text_forms[1]; }
    			if (n1 == 1) { return text_forms[0]; }
    		return text_forms[2];
		}
		res = declOfNum(1, ['запись', 'записи', 'записей'])
		alert(`В результате выполнения запроса ${answer} 1 ${res}`);

                let error = "Ошибка";
                function fibb(n){
                    let last = 1, next = 1;
                    if (n <= 1000) {
                        for(let i = 1; i < n; i++){
                        let current = next;
                        next = last + next;
                        last = current;
                        }
                    } else {
                        return error;
                    }
                    return last;
                }
                res = fibb(52);
		alert(`Число Фибоначчи 52: ${res}`);	
	 </script>
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