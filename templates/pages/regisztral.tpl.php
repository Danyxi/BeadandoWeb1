<img class="hatterkep" src="./images/pizzahatter.png">
<div class="rendel">
<?php if(isset($uzenet)) { ?>
    <h1><?= $uzenet ?></h1>
    <?php if($ujra) { ?>
        <a class="vissza" href="?oldal=belepes">Próbálja újra!</a>
    <?php } ?>
<?php } ?>
</div>

