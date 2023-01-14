<?php require("blocks/header.php"); ?>


<div class="form-block">
    <form action="result.php" class="form" method="post" enctype="multipart/form-data">

        <b>Текст</b>
        <textarea name="data" cols="30" rows="10"></textarea>
        
    
        <div class="but">
                <button id="button-submit" type="submit">Анализировать</button>
        </div>

    </form>
</div>
      
<?php require("blocks/footer.php") ?>            