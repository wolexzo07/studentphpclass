<?php
    session_start();

    if(!isset($_SESSION["UNIOSUN_PORTAL_ID"])){
        ?>
            <script>

                alert("You are not logged in!");

                window.location="loginPortal.php";

            </script>
        <?php
    }

?>