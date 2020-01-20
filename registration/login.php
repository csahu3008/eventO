<?php include '../libraries/Database.php'; ?>
<?php
        $db = new Database();


        session_start();
            if(isset($_SESSION['user']))
            {
                $current_usr = $_SESSION['user'];
                if($current_usr[0] == 'C')
                    echo " <script>window.location = ''</script>";
                if($current_usr[0] == 'S')
                    echo " <script>window.location = ''</script>";
            }
        session_abort();


        if(isset($_REQUEST['submit']))
        {
            $c=0;
            $usrname = $_REQUEST['username'];
            $pass = $_REQUEST['pass'];
            
            if($usrname[0] == 'C')
            {
                // create query
                $query = "SELECT * FROM college where username='$usrname'";
            }
            if($usrname[0] == 'S')
            {
                $query = "SELECT * FROM student WHERE username='$usrname'";
            }
            else{
                echo "<script>alert('Usr Error');</script>";
            }
            $log = $db->select($query);

            while($row = $log->fetch_assoc())
            {
                if($row['password'] == $pass)
                {
                    $c++;
                }

                if($c == 1)
                {
                    session_start();
                    $_SESSION['user'] = $usrname;
                    if($usrname[0] == 'C')
                    {
                        echo "<script>  windows.location = ' ' </script>";
                    }
                    if($usrname[0] == 'S')
                    {
                        echo "<script>  windows.location = ' ' </script>";
                    }
                }
                else{
                    echo "<script> alert('Invalid Username or Password'); </script>";
                }
            }

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