<?php
    include_once("validateSession.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UNIOSUN PORTAL :: Welcome <?php echo $_SESSION["UNIOSUN_PORTAL_LAST_NAME"]." ".$_SESSION["UNIOSUN_PORTAL_FIRST_NAME"]?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION["UNIOSUN_PORTAL_LAST_NAME"]." ".$_SESSION["UNIOSUN_PORTAL_FIRST_NAME"]?></h1>
        <p>Matric No: <?php echo $_SESSION["UNIOSUN_PORTAL_MATRIC_NO"]?></p>
        <p>Gender: <?php echo $_SESSION["UNIOSUN_PORTAL_GENDER"]?></p>
        <p>Status: <?php echo $_SESSION["UNIOSUN_PORTAL_STATUS"]?></p>
        <p><a href="update.php?pid=<?php echo $_SESSION["UNIOSUN_PORTAL_ID"]?>">Update Profile</a></p>
        <p><a href="usersLogoff.php">Logoff</a></p>
        
        <script src="" async defer></script>
    </body>
</html>