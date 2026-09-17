<?php
   
   function encryptPass($input){
    
        $salt = "AsDbVxcGjhTyUjH125673881?#";

        $hash = md5($input.$salt).sha1($salt.$input);

        return $hash;
   }
   
   function sanitizer($value , $connection){

        //include_once("connection.php");

        $value = trim($value);

        $value = stripslashes($value);

        return mysqli_real_escape_string($connection,$value);

        //return $value;

    }

    function switchitup($gen , $option){

        if($gen == "male" && $option == "M"){

            $response = "checked";

        }
        
        if($gen == "female" && $option == "F"){

            $response = "checked";

        }

        if(isset($response)){

            return $response;

        }
        
    }

?>