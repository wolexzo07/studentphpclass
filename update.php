<?php
    
    error_reporting(E_ALL);

    include_once("connection.php");

    include_once("functions.php");

    if(isset($_GET["pid"]) && !empty($_GET["pid"])){

        // Validating the data existence

        $input = $_GET["pid"];

        $pid = sanitizer($input , $connection); // sanitized against sql injection

        $response = "SELECT COUNT(*) AS counted FROM student WHERE id='$pid'";

        if($read = mysqli_query($connection , $response)){

            $getRec = mysqli_fetch_assoc($read);

            $getCount = $getRec["counted"];

            if($getCount > 0){

                $sql = "SELECT * FROM student WHERE id='$pid'";

                if($read = mysqli_query($connection , $sql)){

                    while($row = mysqli_fetch_assoc($read)){

                                $pid = $row["id"];
                                $first = $row["first_name"];
                                $last = $row["last_name"];
                                $gen = $row["gender"];
                                $status = $row["is_status"];
                                $level = $row["level"];
                                $age = $row["age"];
                                $dated = $row["date_time"];
                                $matricno = $row["matric_no"];
                                $password = $row["password"];

                                ?>
                                    <style>
                                        .upbutton{
                                            margin-top:10pt;
                                        }
                                    </style>
                                    <form method="post" action="controller.php">
                                        
                                        <p class="ml-text">Enter First Name</p>

                                        <input type="text" class="cl-text" value="<?php echo $first;?>" name="first"/>

                                        <p class="ml-text">Enter Last Name</p>

                                        <input type="text" class="cl-text" name="last" value="<?php echo $last;?>"/>
                                        
                                        <p class="ml-text">Enter Level</p>

                                        <input type="text" class="cl-text" name="level" value="<?php echo $level?>"/>

                                        <p class="ml-text">Enter Age</p>

                                        <input type="text" class="cl-text" name="age" value="<?php echo $age;?>"/>
                                        
                                        <p class="ml-text">Enter matric no</p>

                                        <input type="text" class="cl-text" name="mid" value="<?php echo $matricno;?>"/>
                                        
                                        <p class="ml-text">Enter Password</p>

                                        <input type="password" class="cl-text" name="pass"/>
                                        
                                        <p class="ml-text">Choose Gender</p>

                                        <input type="radio" <?php echo switchitup($gen , "M");?> class="cl-text" name="gen" value="male"/> Male

                                        <input type="radio" <?php echo switchitup($gen , "F");?> class="cl-text" name="gen" value="female"/> Female


                                        <input type="hidden" name="pid" value="<?php echo $_GET['pid'];?>"/>

                                        <input type="hidden" name="midCurrent" value="<?php echo $matricno;?>"/>

                                        
                                        <input type="hidden" name="_updateToken" value="<?php echo sha1(uniqid());?>"/>

                                        <div class="upbutton">
                                            <input type="submit" name="updateButton" value="update">
                                        </div>
                                        

                                    </form>
                                
                                <?php

                    }

                }else{

                    echo "Failed to query";

                }

            }else{

                header("location:fetch.php");

            }

        }

    }else{

        ?>
            <script>
                alert("Parameter missing!");
                window.location="fetch.php";
            </script>
        <?php

    }

?>