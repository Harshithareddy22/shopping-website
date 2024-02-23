<?php
   session_start();

   include("db.php");

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
               if($result && mysqli_num_rows($result) > 0)
                {
                  $user_data = mysqli_fetch_assoc($result);

                  if($user_data['pass'] == $password)
                   { 
                    header("location: index.php");
                    die;
                   }

                }
            }
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
  
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
  background-image: url('bg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <h4>&emsp;It's free and only take a minute</h4>
       
        <form method="POST">
                <label>Email</label>
                <input type="email" name="mail" placeholder="Enter your valid Email" required><br><br>
                <label>Password</label>
                <input type="password" name="pass" placeholder="Enter your valid Password" required><br><br>
                <input type="submit" name="" value="submit">
        </form>
        <p>Not have an account? <a href="signup.php">Sign Up</a></p>
</body>
</html>