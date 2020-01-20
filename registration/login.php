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
        <input type="password" placeholder="Password" name = "password">
        <input type="submit" placeholder="LOGIN" name = "submit">
    </form>
</body>
</html>

<?php
       session_start();
       $con = mysqli_connect('localhost' , 'root' , '' , 'evento');
        if(isset($_REQUEST['submit']))
        {
            $c=0;
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            
            if($username[0] == 'C')
            {
                $query = "SELECT * FROM college where username='$username'";
            }
            else if($username[0] == 'S')
            {
                $query = "SELECT * FROM student WHERE username='$username'";
            }
            
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_array($result))
            {
                if($row['password'] == md5($password))
                {
                     $_SESSION['user']=$username;
                    echo"<h1>Logged in successfully</h1>";
                }
              }
            }
?>