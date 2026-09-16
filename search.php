<style>
    .s-input{
        font-weight:bold;
    }
</style>

<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <input type="text" name="searchinput" placeholder="Search Records"/>
    <input type="submit" name="search" value="Search"/>
    <input type="hidden" name="_search_token" value="<?php echo sha1(uniqid());?>"/>
</form>

<?php
    if(isset($_POST["searchinput"]) && !empty($_POST["searchinput"])){

        ?>
            <p>You searched for <span class="s-input"><?php echo $_POST["searchinput"];?></span></p>
        <?php

    }
?>