<?php
    include_once("connection.php");

    $create = "CREATE TABLE IF NOT EXISTS student(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    level VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender ENUM('','male','female') NOT NULL,
    date_time DATETIME NOT NULL,
    is_status ENUM('','0','1') NOT NULL
    
    )";

    if($read = mysqli_query($connection , $create)){

        echo "Table was created successfully!";
        
    }
?>