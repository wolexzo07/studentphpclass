<form action="controller.php" method="post">
     <p class="ml-text">Enter matric no</p>

    <input type="text" class="cl-text" name="mid"/>
    
    <p class="ml-text">Enter Password</p>

    <input type="password" class="cl-text" name="pass"/>

    <input type="hidden" name="_loginToken" value="<?php echo sha1(uniqid());?>"/>

    <div class="upbutton">
        <input type="submit" name="loginButton" value="Login">
    </div>
</form>