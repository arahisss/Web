<?php
date_default_timezone_set("Europe/Moscow");
?>

<!DOCTYPE html>
<html long="ru">
<head>
    <meta charset="utf-8">
    <title>Averkova 211-361 LR_11</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div id="main_menu">
                <span>Аверкова Карина 211-361</span>
                <?php
                    echo '<a href="?html_type=TABLE';
                    if( isset($_GET['content']) )
                        echo '&content='.$_GET['content'];
                    echo '"';

                    if( array_key_exists('html_type', $_GET) && $_GET['html_type']== 'TABLE' )
                        echo ' class="selected"';
                    echo '>Табличная форма</a>';

                    echo '<a href="?html_type=DIV';
                    if( isset($_GET['content']) )
                        echo '&content='.$_GET['content'];
                    echo '"';

                    if( array_key_exists('html_type', $_GET) && $_GET['html_type']== 'DIV' )
                        echo ' class="selected"';
                    echo '>Блоковая форма</a>';
                ?>
            </div>

        </header>

        <main>
            <div class="inline">
                <div id="product_menu">
                    <?php
                        echo '<a href="?content=n/a';
                        if ( isset($_GET['html_type']))
                            echo '&html_type='.$_GET['html_type'];
                        echo '"';

                        // выделение ссылки
                        if( !isset($_GET['content']) || $_GET['content']=="n/a")
                            echo ' class="selected"';
                        echo '>Вся таблица умножения</a>';


                        for( $i=2; $i<=9; $i++ ) {
                            echo '<a href="?content='.$i.'';

                            if ( isset($_GET['html_type']))
                                echo '&html_type='.$_GET['html_type'];
                            echo '"';

                            // выделение ссылки
                            if( isset($_GET['content']) && $_GET['content']==$i )
                                echo ' class="selected"';
                            echo '>Таблица умножения на '.$i.'</a>';
                        }
                    ?>
                </div>

                <section class="exmple">
                <?php
                    if (!isset($_GET['html_type']) || $_GET['html_type']== 'TABLE')
                        outTableForm();
                    else
                        outDivForm();
                ?>
                </section>
            </div>
            

        </main>
        <footer>
            <span>Тип верстки: <?=getHTMLType()?></span><br>
            <span>Формат таблицы: <?=getContent()?></span><br>
            <span>Дата и время: <?php echo date('d.m.Y в H-i:s') ?></span>

        </footer>
    </div>
</body>
</html>

<?php

function outTableForm() {
    if( !isset($_GET['content']) || $_GET['content'] == 'n/a') {
        
        for($i=2; $i<10; $i++) {
            echo '<table class="tvRow">';
            outRowTable($i);
            echo '</table>';
        }
    } 
    else {
        echo '<table class="tvSingleRow">';
        outRowTable( $_GET['content'] );
        echo '</table>';
    }
    
}


function outDivForm () {
    if( !isset($_GET['content']) || $_GET['content']=="n/a") {
        for($i=2; $i<10; $i++) {
            echo '<div class="bvRow">';
            outRow( $i );
            echo '</div>';
        }
    }
    else {
        echo '<div class="bvSingleRow">';
        outRow( $_GET['content'] );
        echo '</div>';
    }
}

function outRow($n) {
    for ($i=2; $i<=9; $i++) {
        echo outNumAsLink($n);
        echo '×';
        echo outNumAsLink($i);
        echo '=';
        echo outNumAsLink($i*$n).'<br>';
    }
}

function outRowTable($n) {
    for ($i=2; $i<=9; $i++) {
        echo '<tr><td>';
        echo outNumAsLink($n);
        echo '×';
        echo outNumAsLink($i);
        echo '</td><td>';
        echo outNumAsLink($i*$n);
        echo '</td></tr>';
    }
}

function outNumAsLink( $x ) {
    if ($x <= 9) {
        echo '<a href="?content='.$x.'&html_type=';
        if (!isset($_GET['html_type']))
            echo 'TABLE"';
        else 
            echo $_GET['html_type'].'"';
        echo '>'.$x.'</a>';

    }
    else
        echo $x;
}

function getHTMLType() {
    if (!isset($_GET['html_type']))
        return 'TABLE';
    else
        return $_GET['html_type'];
}

function getContent() {
    if (!isset($_GET['content']) || $_GET['content'] == 'n/a')
        return 'Все колонки';
    else
        return $_GET['content'].'-я колонка';
}

?>