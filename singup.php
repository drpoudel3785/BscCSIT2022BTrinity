<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
</head>
<body>
    <?php
    //checking the form is submitted or not
    if(isset($_POST['submit']))
    {
        //capturing the forms data
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        //SQL Statement
        $sql = "INSERT INTO users(username, password, email, role, status)VALUES('$username', '$password', '$email', 'user', 1)";
        //making connection
        include_once("connection.php");
        //Making query
        $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($qry){
            echo "Data inserted";
        }
        else{
            echo "Unable to insert Data. Something Wrong";
        }
    }
    ?>
    <form method="POST" name="register" action="" enctype="multipart/form-data">
        <fieldset>
            <legend>SignUP</legend>
            <input type="text" name="username" placeholder="username" required"/><br/>
            <input type="password" name="password" placeholder="password" required"/><br/>
            <input type="password" name="cpassword" placeholder="ConfirmPassword" required"/><br/>
            <input type="email" name="email" placeholder="you@domain.com" required/><br/>
             <input type="submit" name="submit" value="Register"/>
            <input type="reset" name="reset" value="Clear"/>
            <br/>
            <p>Have an Account <a href="login.php">Login</a></p>
        </fieldset>
    </form>
    
</body>
</html>