<?php

    include_once("connection.php");

    include_once("functions.php");

    if(isset($_POST["_updateToken"]) && !empty($_POST["_updateToken"])){

        $first = sanitizer($_POST["first"], $connection);

        $last = sanitizer($_POST["last"], $connection);

        $level = sanitizer($_POST["level"], $connection);

        $age = sanitizer($_POST["age"], $connection);

        $gen = sanitizer($_POST["gen"], $connection);

        $pid = sanitizer($_POST["pid"], $connection);


        $response = "SELECT COUNT(*) AS counted FROM student WHERE id='$pid'";

        if($read = mysqli_query($connection , $response)){

            $getRec = mysqli_fetch_assoc($read);

            $getCount = $getRec["counted"];

             if($getCount > 0){
                
                    $updatesql = "UPDATE student SET first_name='$first',last_name='$last',age='$age',level='$level',gender='$gen' WHERE id='$pid'";

                    if($read = mysqli_query($connection,$updatesql)){
                         ?>
                            <script>
                                alert("Record updated successfully!");
                                window.location="fetch.php";
                            </script>
                        <?php
                    }else{
                          ?>
                            <script>
                                alert("Record update failed!");
                                window.location="fetch.php";
                            </script>
                        <?php
                    }

             }else{

                ?>
                    <script>
                        alert("Parameter was tampered!");
                        window.location="fetch.php";
                    </script>
                <?php

             }
            
        }



    }
?>