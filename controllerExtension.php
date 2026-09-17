<?php   

        if(!isset($toks)){

            exit();
            
        }
     // Validating the data existence
        
        $response = "SELECT COUNT(*) AS counted FROM student WHERE id='$pid'";

        if($read = mysqli_query($connection , $response)){

            $getRec = mysqli_fetch_assoc($read);

            $getCount = $getRec["counted"];

             if($getCount > 0){

                    if($pass == ""){

                        $updatesql = "UPDATE student SET first_name='$first',last_name='$last',age='$age',level='$level',gender='$gen',matric_no='$mid' WHERE id='$pid'";

                    }else{

                        $pass = encryptPass($pass);

                        $updatesql = "UPDATE student SET first_name='$first',last_name='$last',age='$age',level='$level',gender='$gen',matric_no='$mid',password='$pass' WHERE id='$pid'";

                    }
                
                    

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
?>