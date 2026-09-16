<?php

    if(!isset($ptoken)){

    
      // die("Oops");
      header("location:error.php");

    }

    $select = "SELECT * FROM student $cmdExtra";

    if($read = mysqli_query($connection , $select)){

            include_once("search.php");

        ?>
        <a href="addNew.php">Add New Record</a>
        <table border="1px" style="margin-top:10pt;" width="100%" cellspacing="0px" cellpadding="10px">
                <tr align="left">
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Status</th>
                    <th>Age</th>
                    <th>Level</th>
                    <th>Gender</th>
                    <th>Registered on</th>
                    <th>Action</th>
                </tr>
        <?php

        $counter = 0;

        while($row = mysqli_fetch_assoc($read)){

            $counter++;

            $pid = $row["id"];
            $first = $row["first_name"];
            $last = $row["last_name"];
            $level = $row["level"];
            $gen = $row["gender"];
            $status = $row["is_status"];
            $level = $row["level"];
            $age = $row["age"];
            $dated = $row["date_time"];

            ?>
                <tr>
                    <td><?php echo $counter;?></td>
                    <td><?php echo $first;?></td>
                    <td><?php echo $last;?></td>
                    <td><?php echo $status;?></td>
                    <td><?php echo $age." yrs";?></td>
                    <td><?php echo $level;?></td>
                    <td><?php echo $gen;?></td>
                    <td><?php echo $dated;?></td>
                    <td>
                        <a href="update.php?pid=<?php echo $pid;?>">Update</a>
                        <a href="delete.php?pid=<?php echo $pid;?>">Delete</a>
                        <a href="view.php?pid=<?php echo $pid;?>">View</a>
                    </td>
                </tr>
            <?php

        }

        ?></table><?php
        
    }else{

        echo "Failed to Fetch Data!";

    }
?>