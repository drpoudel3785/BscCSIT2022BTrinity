<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //capturing the forms data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //checking the valid user credentials
    if($username=="admin" and $password=="admin123"){
        //redirect to the dashboard.php
        header("Location: dashboard.php");
    }
    else{
        echo "Unable to login. Credential Error!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" name="login" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="username" placeholder="Username" required/><br/>
            <input type="password" name="password" placeholder="Password" required /><br/>
            <input type="checkbox" name="rememberme" value="1" />Remember Me<br/>
            <p>Don't have a Account</p>
            <a href="singup.php">SignUP</a><br/>
            <input type="submit" name="submit" value="Login" />
        </fieldset>
    </form> 
</body>
</html>