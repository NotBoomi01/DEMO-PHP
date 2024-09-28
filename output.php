<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Confirm_password = $_POST["Confirm-password"];
    
    if(trim($Username)){
    
    echo "Username is " . $Username. "<br>";
    } else {
        echo "Username is empty <br>";
    }

    if(trim($Email)){
        echo "Email is " . $Email. "<br>";
    }else{
        echo "Email is empty <br>";
    }


    if(trim($Password)){
        echo "Password is " . $Password. "<br>";
    }else{
        echo "Password is empty <br>";
    }



}


?>