<?php

function Createdb(){
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "rms";

    $con = mysqli_connect($servername,$username,$password);

    if(!$con){
        die("Connection Failed:".mysqli_connect_error());

    }


    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con,$sql)){
        $con = mysqli_connect($servername,$username,$password,$dbname);

        
        $sql = "
                CREATE TABLE IF NOT EXISTS users(
                    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    user VARCHAR(30) NOT NULL,
                    user_name VARCHAR(30) NOT NULL,
                    role_name VARCHAR(30) NOT NULL,
                    phone VARCHAR(30) NOT NULL,
                    address VARCHAR(100) NOT NULL
        
                   
        
                );
        
        
        ";
        
        if(mysqli_query($con,$sql)){
          return $con;
        }
        else{
            echo "Cannot Create Table...!";
        }
    }
    else{
        echo "Error while creating database".mysqli_error($con);
    }
}

?>
