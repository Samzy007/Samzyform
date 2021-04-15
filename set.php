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
    <?php
    if(isset($_POST['done'])){
        $mail = $_POST['email'];
    }
    echo "a link will be sent to this email :" ;
    echo $mail;
    echo "  to resset your password"
    ?>
</head>
<body>
<p><a href="login.php">Login Here</a></p>
</body>
</html>