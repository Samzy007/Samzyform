<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successfull</title>
    <style>
    body{
        font-family: Calibri, Helvetica, sans-serif;
        background-color: pink
    }
    </style>
    <?php
    session_start();
    if(isset($_POST['register'])){
       $first_name=$_POST['first_name'];
       $last_name = $_POST['last_name'];
       $dob = $_POST['dob'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       $array_data =[
           'first_name' => $first_name,
           'last_name' => $last_name,
           'dob' => $dob,
           'username' => $username,
           'email' => $email,
           'password' => $password
       ];

       file_put_contents('files/'. $array_data['first_name'] . ".json" , json_encode($array_data));
    
    }


    echo "congratulations you are now a student";
?>
<p><a href="login.php">Login Here</a></p>
</head>
<body>
    
</body>
</html>