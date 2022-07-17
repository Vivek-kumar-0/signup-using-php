<?php
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="signup";

$conn =mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
    echo"connection fail";
}

if($_SERVER['REQUEST_METHOD']==='POST') 
    {
        $a = $b = $c = '';
        $a = $_POST['username'];
        $b = $_POST['password'];
        $c = $_POST['confirm_password'];
        

        $temp = "INSERT INTO registration(username,password, confirm_password) VALUES ('$a','$b','$c')";
         mysqli_query($conn,$temp)or die("query fail");
        echo '<script> alart("data submitted")</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<section>
    <div class="imgBx">
        <img src="img/macbook.jpg">
    </div>
<div class="contentBx">
    <div class="formBx">
        <h2>Signup</h2>
        <form method="POST" action="index.php">
            
            <div class="inputBx">
                <span>Username</span>
                <input type="text" name="username">

            </div>
            <div class="inputBx">
                <span>Password</span>
                <input type="password" name="password">
             </div>

             <div class="inputBx">
                <span>Confirm password</span>
                <input type="password" name="confirm_password">

            </div>
             <div class="remember">
                 <label><input type="checkbox" name="">Remember me</label>

             </div>
             <div class="inputBx">
                 <input type="submit" value="submit" name="sumit">

             </div>
             <div class="inputBx">
                <p> I have an account. <a href="registration.html">Log in</a></p>

            </div>
        </form>
        
    </div>

</div>
</section>

</body>
</html> 