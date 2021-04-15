<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    body{
        font-family: Calibri, Helvetica, sans-serif;
        background-color: pink
    }
    </style>
</head>
<h1><a href="index.php">Samzy PHP Class</a></H>
<p>Already have an accont? <a href="login.php">Login Here</a></p>
<h1>Please fill in the registration form</h>

<h1></h>
</head>
<body>


<form method="post" action="reg.php" name="">
<div class="form-element">
<label>First Name</label>
<input type="text" name="first_name" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Last Name</label>
<input type="text" name="last_name" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Date of Birth</label>
<input type="date" name="dob" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>
<div class="form-element">
<label>Email</label>
<input type="email" name="email" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="register" value="register">Register</button>
</form>
</body>
</html>