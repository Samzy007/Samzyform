<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body{
        font-family: Calibri, Helvetica, sans-serif;
        background-color: pink
    }
    </style>
</head>
<h1><a href="index.php">Samzy PHP Class</a></H>
<h1>Please enter your login details</h>
<p>Don't have an accont? <a href="signup.php">Sign-up Here</a> to register</p>
<h1></h>
<body>

<form method="post" action="log.php" name="signin-form">
<?php session_start(); /* Starts the session */
/* Check Login form submitted */
if(isset($_POST['login'])){
/* Define username and associated password array */
$logins = array('Samzy' => '1234',);

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>
<p>Forget Password? <a href="resset.php">Resset Password</a> to resset your password</P>
</body>
</html>