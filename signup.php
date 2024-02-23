<?php 
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['number'];
        $address = $_POST['add'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
          $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
          mysqli_query($con,$query);
          echo "<script type='text/javascript'> alert('Sucessfully Register')</script>";
        }
        else
        {
        echo "<script type='text/javascript'> alert('Enter valid details')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup Form</title>
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
  <div class="Signup">
    <h1>Sign Up</h1>
    <form method="POST" action>
            <label>First Name</label>
            <input type="text" name="fname" placeholder="Enter First Name" required><br><br>
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Enter Last Name" required><br><br>
            <label>Gender</label>
            <input type="text" name="gender" placeholder="Enter Gender" required><br><br>
            <label>Contact Address</label>
            <input type="tel" name="number" placeholder="Enter Contact Address" required><br><br>
            <label>Address</label>
            <input type="text" name="add" placeholder="Enter Address" required><br><br>
            <label>Email</label>
            <input type="email" name="mail" placeholder="Enter Email" required><br><br>
            <label>Password</label>
            <input type="password" name="pass" placeholder="Enter Password" required><br><br>
            <input type="submit" name="" value="submit" class="har">
    </form>
    <p>By clickilng to signup button, ou agree to our<br><a href=""> Terms and Conditons</a> and <a href="#"> Privacy and POlicy</a></p>
    <p>Already have an account? <a href="login.php">Login Here</a></p>
  </div>  
   


</body>
</html>