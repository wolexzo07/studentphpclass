<?php
    session_start();

    unset($_SESSION["UNIOSUN_PORTAL_ID"]);
    unset($_SESSION["UNIOSUN_PORTAL_FIRST_NAME"]);
    unset($_SESSION["UNIOSUN_PORTAL_MATRIC_NO"]);
    unset($_SESSION["UNIOSUN_PORTAL_LAST_NAME"]);
    unset($_SESSION["UNIOSUN_PORTAL_GENDER"]);
    unset($_SESSION["UNIOSUN_PORTAL_STATUS"]);

    ?>
        <script>

            alert("You have successfully logged off!");

            window.location="loginPortal.php";

        </script>
        
    <?php
    
?>