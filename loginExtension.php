<?php
        if(isset($_POST["_loginToken"]) && !empty($_POST["_loginToken"])){

            $mid = sanitizer($_POST["mid"], $connection);

            $pass = sanitizer($_POST["pass"], $connection);

            $hash = encryptPass($pass);

            $sqlcmd = "SELECT COUNT(*) AS counted FROM student WHERE matric_no='$mid' AND password='$hash' LIMIT 1";


            if($read = mysqli_query($connection , $sqlcmd)){

                $getRec = mysqli_fetch_assoc($read);

                $getCount = $getRec["counted"];

                    if($getCount > 0){
                        
                      $fetch = "SELECT * FROM student WHERE matric_no='$mid' AND password='$hash' LIMIT 1";

                      if($read = mysqli_query($connection , $fetch)){
    
                        while($row = mysqli_fetch_assoc($read)){

                                $pid = $row["id"];
                                $first = $row["first_name"];
                                $mid = $row["matric_no"];
                                $last = $row["last_name"];
                                $gen = $row["gender"];
                                $status = $row["is_status"];

                                session_start();

                                $_SESSION["UNIOSUN_PORTAL_ID"] = $pid;
                                $_SESSION["UNIOSUN_PORTAL_FIRST_NAME"] = $first;
                                $_SESSION["UNIOSUN_PORTAL_MATRIC_NO"] = $mid;
                                $_SESSION["UNIOSUN_PORTAL_LAST_NAME"] = $last;
                                $_SESSION["UNIOSUN_PORTAL_GENDER"] = $gen;
                                $_SESSION["UNIOSUN_PORTAL_STATUS"] = $status;
                                
                                ?>
                                    <script>
                                        
                                        alert("Login successful!");

                                        window.location="dashboard.php";

                                    </script>
                                <?php

                        }
                    
                      }

                    }else{

                    ?>
                        <script>

                            alert("Invalid login credentials!");

                            window.location="loginPortal.php";

                        </script>
                    <?php

                }

            }

        }
?>