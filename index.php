<?php require("blocks/header.php"); ?>
    
    <main>
        <h1>Images from database</h1>
      
        <?php
            include "db.php";
            $result = mysqli_query($connect, "SELECT * FROM `images`");
        ?>

        <div class="content">
            <?php while($img = mysqli_fetch_assoc($result)) {
                ?>
                
                <img class="img_db" src="img/<?=$img["name"];?>" alt="<?=$img["title"];?>" title="<?=$img["title"];?>">
            <?php
            };
            ?>
        </div>
        
    </main>

<?php require("blocks/footer.php"); ?>