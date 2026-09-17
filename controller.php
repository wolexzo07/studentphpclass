<?php

    include_once("connection.php");

    include_once("functions.php");

    include_once("loginExtension.php");

    if(isset($_POST["_updateToken"]) && !empty($_POST["_updateToken"])){ // handle update request

        $first = sanitizer($_POST["first"], $connection);

        $last = sanitizer($_POST["last"], $connection);

        $level = sanitizer($_POST["level"], $connection);

        $age = sanitizer($_POST["age"], $connection);

        $gen = sanitizer($_POST["gen"], $connection);

        $pid = sanitizer($_POST["pid"], $connection);

        $mid = sanitizer($_POST["mid"], $connection); // matric no to be updated

        $midc = sanitizer($_POST["midCurrent"], $connection); // current matric no


        $pass = sanitizer($_POST["pass"], $connection);

        if($midc == ""){
            
            $cmd = "nil";

        }else{

            $cmd = "nnil";

        }


        // Preventing duplicate matric no

        $response = "SELECT COUNT(*) AS counted FROM student WHERE matric_no='$mid' LIMIT 1";

        if($read = mysqli_query($connection , $response)){

             $getRec = mysqli_fetch_assoc($read);

             $getCount = $getRec["counted"];

             if($cmd == "nnil" && $midc == $mid){ // if current matric no is equal to the new matric no, then update the record

                $toks = "ok";

                include_once("controllerExtension.php");

             }else{

                    if($getCount > 0){ // checking if matric no exists

                        ?>
                            <script>

                                alert("Matric no already exists!");

                                window.location="fetch.php";

                            </script>
                        <?php

                    }else{ // if matric no does not exist, then update the record

                        $toks = "ok";

                        include_once("controllerExtension.php");
        
                    }

             }

        }

    }
?>