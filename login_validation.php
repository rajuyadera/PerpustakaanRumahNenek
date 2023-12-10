<?php
        ob_start();
        session_start();
        ob_end_clean();
        
        $username =$_POST["username"];
        $password =$_POST["password"];
        
        if($username == "user" AND $password == "user")
        {
            $_SESSION["username"] = $username;
            header("location:ShowBooks.php");
        }else{
            header("location:login.php");
        }
?>