<?php
    
    include_once("connection.php");

    $ptoken = sha1(Date("Y-m-d").uniqid());

    if(isset($_POST["searchinput"]) && !empty($_POST["searchinput"])){

        $input = $_POST["searchinput"];

        $cmdExtra = "WHERE first_name LIKE '%$input%' OR last_name LIKE '%$input%'";

    }else{

        $cmdExtra = "";

    }

    $recordCount = "SELECT COUNT(*) AS recordCounter FROM student $cmdExtra";

    if($reader = mysqli_query($connection , $recordCount)){

        $rowCount = mysqli_fetch_assoc($reader);

        $getCount = $rowCount["recordCounter"];

        if($getCount > 0){

            include("fetchExtension.php");

        }else{

            echo "<h4 class=''>No record found in the database!</h4>";

        }

    }


?>

