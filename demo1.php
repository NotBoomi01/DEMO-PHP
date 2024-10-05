<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO</title>
</head>
<body>
    
    <?php if (isset($_GET["error"])){ ?>
  <p style="background-color: red;color: aliceblue"><?php echo $_GET["error"];?></p>
  <?php
    }
    ?>
  
  <?php if (isset($_GET["success"])){ ?>
     <p style="background-color: green;color: aliceblue"><?php echo $_GET["success"];?></p>
 <?php
 }
 ?>

<form action="output.php" method="Post">

<div>
    <label for="Username">Username</label>
    <input type="text" name="Username" id="Username">
 </div>   
    <label for="Email">Email</label>
    <input type="Email" name="Email" id="Email">
    <div>
    <label for="Password">Password</label>
    <input type="Password" name="Password" id="Password">
    </div>   
    <label for="Confirm-password">Confirm Password</label>
    <input type="Password" name="Confirm-password" id="Confirm-password">
<div>
    <input type="Submit" value="Register">
</div>

</form>

</body>
</html>
