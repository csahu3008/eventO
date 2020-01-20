<!DOCTYPE html>
<html> 

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style1.css">
</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <h1>Register College</h1>
            <hr>
            <label for="name"><b>College Name</b></label>
            <input type="text" name="college_name" placeholder="Enter College Name" required>

            <label for="name"><b>College Address</b></label>
            <input type="text" name="college_address" placeholder="Enter College Address" required>

            <label for="university_name"><b>University Name</b></label>
            <input type="text" name="university_name" placeholder="Enter University Name" required>

            <label for="phone"><b>Phone Number</b></label>
            <input type="text"  placeholder="Enter Contact" name="phone" required>

            <label for="psw"><b>Create New Password</b></label>
            <input type="password" name="password" placeholder="Enter Password"  required>

            <label for="psw-repeat"><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password-repeat" required>
             <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>
 <?php

if(isset($_REQUEST['password']))
{
   $name=$_REQUEST['college_name'];
   $address=$_REQUEST['college_address'];
   $university=$_REQUEST['university_name'];
   $phone=$_REQUEST['phone'];
   $password=md5($_REQUEST['password']);
   $username='C@'.$phone; 
   $con=mysqli_connect('localhost','root','','evento');
   $query="insert into college values (null,'$name','$address','$username','$phone','$password','$university')";
   $res=mysqli_query($con,$query);
   if($res){
       echo "Your details are updated succesfully";
   }
   else{
       echo"updataion unsuccessfull";
   }
}

?>
</body>

</html>