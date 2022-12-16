<?php require("blocks/header.html"); ?>


            <div class="form-block">
                <form action="home.php" class="form" method="post" >
                    <h1>Обратная связь</h1>

                    <label for="lastname">ФИО</label>
                    <input value="<?php if (isset($_GET['N'])) echo $_GET['N']; ?>" type="text" name="name">


                    <label>Email</label>
                    <input placeholder="email@mail.ru" type="email" name="email" value="<?php if (isset($_GET['E'])) echo $_GET['E']; ?>">

                    <b>Сообщение</b>
                    <textarea name="message" cols="30" rows="10"></textarea>
                    
                    <p>
                        <b>Тема обращения</b><br>
                        <select name="category" id="">
                            <option value="complaint">Жалоба</option>
                            <option selected value="propose">Предложение</option>
                        </select>
                    </p>

                    <div>
                        <input type="checkbox">
                        <label>Даю согласие на обработку персональных данных</label>
                    </div>

                    <p>
                        <b>Откуда о нас узнали</b><br>

                        <input type="radio" name="source" value="1" <?php if (isset($_GET['S']) & $_GET['S'] == '1') {
                            echo 'checked';}?>>Реклама из интернета<br>

                        <input type="radio" name="source" value="2" <?php if (isset($_GET['S']) & $_GET['S'] == '2') {
                            echo 'checked';
                        } ?>>Рассказали друзья<br>
                    </p>

                    <p>
                        <input type="file" name="file-input" multiple>
                    </p>

                
                    <div class="but">
                        <input type="submit" name="" id="button-submit">
                    </div>

                   
                    

                </form>
            </div>
      
<?php require("blocks/footer.php") ?>            