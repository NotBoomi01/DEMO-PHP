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

    function test($FieldName)
{
    if(trim($FieldName) != ""){
        echo "Field Name is Not Empty";
    }
    else{
        echo "Field name" . $FieldName. "is empty <br>";
    }
}

if($Password == $Confirm_password){
echo "Registration Succesful";
header("location: Demo1.php? success= Registration Successful");
exit;
}
echo "Password Mismatch";
    header("location: demo1.php? error= Password Mismatch");
    exit;

}




?>