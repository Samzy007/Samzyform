<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        font-family: Calibri, Helvetica, sans-serif;
        background-color: pink
    }
    </style>
</head>
<h1><a href="index.php">Samzy PHP Class</a></H>
<h1>Please enter your Email to resset your password</h>
<p>Don't have an accont? <a href="signup.php">Sign-up Here</a> to register</p>
<h1></h>
<body>
<form method="post" action="set.php" name="reset">
  <div class="form-element">
    <label>E-mail</label>
    <input type="email" name="email" required />
  </div>
  <button type="done" name="done" value="done">Submit</button>
  </form>
</body>
</html>