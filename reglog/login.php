<?php
        session_start();
        $con = mysqli_connect('localhost' , 'root' , '' , 'evento');
        if(isset($_REQUEST['submit']))
        {
            $c=0;
            $usrname = $_REQUEST['username'];
            $pass = md5($_REQUEST['pass']);

            
            if($usrname[0] == 'C')
            {
                $query = "SELECT * FROM college where username='$usrname'";
            }
            else if($usrname[0] == 'S')
            {
                $query = "SELECT * FROM student WHERE username='$usrname'";
            }
            
            $result = mysqli_query($con,$query);

            while($row = mysqli_fetch_array($result))
            {
                if($row['password'] == $pass)
                {
                     $c++;
                }
                if($c==1)
                {
                    $_SESSION['user']=$usrname;
                     if($usrname[0] == 'C')
                            echo"<script>window.location='../events/appliedevent.php';</script>";
                     if($usrname[0] == 'S')
                            echo"<script>window.location='../dash/studdash.php';</script>";
                }
                else{
                    echo "<script>alert('Invalid Password');</script>";
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
    <title>Event->O Login</title>
    <link rel = "stylesheet" href = "./css/style.css">
</head>
<body>
    <header>
    <img src="../img/logo.png" alt="" class = "img">
            <nav>
                <ul>
                    <li><a href = "../index.php" class="home">Home</a></li>
                </ul>
            </nav>
    </header>
    <img src="../img/logo.png" alt="" class = "imgbig">
    <div class = "header">
    <!-- <img src="https://t4.ftcdn.net/jpg/02/90/08/85/240_F_290088578_ECTrjVcG4lZS3kdIBqBamIu0l7Z9Tx4Y.jpg" alt="image" class= "bckgrd"> -->

        <p class = "login">LogIn</p>
        <hr>
        <form method = "POST" class = 'form' onsubmit = 'return checklog()' action="login.php">
            <input type = "text" name = "username" placeholder = "Username" class = "inputbox1" id = "usrname"></br>
            <input type = "password" name = "pass" placeholder = "Password" class = "inputbox2" id = "pass"></br>
            <input type="submit" value = "Login" class = "loginbut" name = "submit">
            <p class = "kreg">Have you <span>Register</span>?</p>
            <div class="st"><a href="studentRegistration.php" class="red">Register as a Student</a></div>
            <div class="cl"><a class="red" id = "coll" href = "collegeRegistration.php">Register as a College</a></div>
        </form>
    </div>
    <!-- <footer class="footer"><p>Get Connected</p></footer> -->
   

    
   
</body>
</html>
<script>

        function  checkreg()
        {
                var  m = document.getElementById("usrname1").value;
                var p = document.getElementById("pass1").value;
                if(m.length == 0)
                {
                    alert("Enter Something");
                    return false;
                }
                else if(p.length < 8){
                    alert("Password is too short");
                    return false;
                }
                else{
                    return true;
                }
                
        }

                    
        function checklog()
        {
                var m = document.getElementById("usrname").value;
                var p = document.getElementById("pass").value;
                if(m.length == 0)
                {
                    alert("Something Empty");
                    return false;
                    
                }
                else if(!p)
                {
                    alert("Don't you have Password");
                    return false;
                }
                else{
                    return true;
                }
        }
    </script>




        
<!-- session_start();
            if(isset($_SESSION['user']))
            {
                $current_usr = $_SESSION['user'];
                if($current_usr[0] == 'C')
                    echo " <script>window.location = ''</script>";
                if($current_usr[0] == 'S')
                    echo " <script>window.location = ''</script>";
            }
        session_abort(); -->
