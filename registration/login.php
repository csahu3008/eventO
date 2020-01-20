<?php include '../libraries/Database.php'; ?>
<?php
        $db = new Database();
        if(isset($_REQUEST['submit']))
        {
            $usrname = $_REQUEST['username'];
            $pass = $_REQUEST['pass'];

        }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>login</title>
</head>
<body>
    <form action="login.php" class="form" method="post">
        <h1>LOGIN</h1>
        <input type="text" placeholder="Username" name = "username">
        <input type="password" placeholder="Password" name = "pass">
        <input type="submit" placeholder="LOGIN" name = "submit">
    </form>
</body>
</html>