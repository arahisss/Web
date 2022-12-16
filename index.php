<?php require("blocks/header.php"); ?>
    
    <main>
        <div class="content">
            <div class="text">
                <h1>Природа</h1>
                <h2>Природа выдержит самый тщательный осмотр.
                    Она предлагает нам взглянуть на ее самый маленький лист и взглянуть на ее равнину, как на насекомое.</h2>

                <h2>Наши цели:</h2>
                <il>
                    <?php
                        $array = array('Показать красоту', 'Показать важность', 'Привлечь внимание к глобальным проблемам');
                        
                        foreach ($array as $i) {
                            echo '<li>'.$i.'</li>';
                        }
                    ?>
                
                    <!-- <li>Показать красоту</li>
                    <li>Показать важность</li>
                    <li id="last">Привлечь внимание к глобальным проблемам</li> -->

                </il>
                <p class="learn_more-p">
                    <a class="learn_more" href="#">Узнать больше</a>
                </p>
                
            </div>
            <div>
                <?php 
                    if(date('s') % 2 === 0)
                        $name='1'; 
                    else
                        $name='2';

                    echo '<img id="img_nature" src="img/img_'.$name.'.JPG" alt="Меняющаяся фотография">';    
                ?>
                
            </div>
        </div>
        
    </main>

<?php require("blocks/footer.php") ?>