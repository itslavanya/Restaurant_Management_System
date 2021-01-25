<?php

session_start();

include 'database_connection.php';
   $loggedIn = false;
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
 if ($username && $password){
 // User Entered fields
    $query = "SELECT username FROM login WHERE BINARY username = '$username' AND BINARY password = '$password'";

        $result = mysqli_query( $conn, $query);

 if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }

        $row = mysqli_fetch_array($result);

        if(!$row){
		   header("Refresh: 2; url=login.php");
           echo "<div>";
           echo "<p align='center'> <font color=red  size='15pt'>No existing user or wrong password!!!</font></p>";
            echo "</div>";
            if(empty($_POST["remember"])) {
                setcookie("username","");
                setcookie("password","");
                echo "Cookies Not Set";
            }
            
       }
          else{
           header("Refresh:0; url=dashboard.php");
           if(!empty($_POST["remember"])) {
            setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
            setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
            echo "Cookies Set Successfuly";
        }
       }          
   }
   

?>