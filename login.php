<?php 
session_start();

$message="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST['username'];
    $password=$_POST['pss'];

    if(!isset($_SESSION["username"])){
        $message="Please, sign up first";    
    }
    else{

        if($username==$_SESSION['username'] && $password==$_SESSION['password']){

            $_SESSION['userdashboard']=$username;

            //open dashboard
            header("Location:dashboard.php");
            exit();
        }
        else{
            $message="Incorrect username or password";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">

        <h2>Login Form</h2>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="pss" placeholder="password"><br>
        <button type="submit">Login</button>
        <h3><?php $message ?></h3>
        <a href="sign up.php">Sign up</a>

    </form>

</body>
</html>