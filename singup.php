<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
</head>
<body>
    <form method="POST" name="register" action="" enctype="multipart/form-data">
        <fieldset>
            <legend>SignUP</legend>
            <input type="text" name="username" placeholder="username" required"/><br/>
            <input type="password" name="password" placeholder="password" required"/><br/>
            <input type="password" name="cpassword" placeholder="ConfirmPassword" required"/><br/>
            <input type="email" name="email" placeholder="you@domain.com" required/><br/>
            <input type="date" name="dob" required /><br/>
            <select name="city" size="1" >
                <option value="ktm">Kathmandu</option>
                <option value="lpt" selected="selected" >Lalitpur</option>
                <option value="bhk">Bhaktapur</option>
                <option value="oth">Others</option>
            </select><br/>
            <input type="radio" name="gender" value="Male" checked="checked" />Male
            <input type="radio" name="gender" value="Female"  />Female
            <input type="radio" name="gender" value="Others"  />Others<br/>

            <textarea rows="5" cols="50" /></textarea><br/>
            <input type="submit" name="submit" value="Register"/>
            <input type="reset" name="reset" value="Clear"/>
            <br/>
            <p>Have an Account <a href="login.php">Login</a></p>
        </fieldset>
    </form>
    
</body>
</html>