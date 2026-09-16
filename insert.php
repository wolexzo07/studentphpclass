<?php
    include_once("connection.php");
    
    $id = 2354; 
    
    $first = "Omoniyi"; 
    
    $last = "Rose";
    
    $age = 24; 
    
    $gen = "male"; 
    
    $dated = DATE("Y-m-d H:i:s");
    
    $status = 1;
    $level = "200 L";
   

    //$insert = "INSERT INTO student (id ,first_name,last_name, age, gender, date_time, is_status , level) VALUES ('$id','$first','$last','$age','$gen','$dated','$status' , '$level')";

    $insert = "INSERT INTO student (first_name,last_name, age, gender, date_time, is_status , level) VALUES ('$first','$last','$age','$gen','$dated','$status' , '$level')";

    if($read = mysqli_query($connection , $insert)){

        echo "Data inserted successfully!";
        
    }
?>

