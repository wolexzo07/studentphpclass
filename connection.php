<?php
    
    $host = "localhost"; $user = "student"; $pass = "student"; $dbname = "student";

    $connection = mysqli_connect($host , $user , $pass , $dbname);

    if(!$connection){

        die(mysqli_errno());

    }/***else{

    echo "connected";

    }***/
?>