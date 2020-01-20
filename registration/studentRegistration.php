<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
<style type="text/css">
	
    #form_login {
        border:none;
        left: 50%;
        top: 50%;
        margin-left: -10%;
        position: absolute;
        margin-top: -15%;
        width:
    
    }
    
        </style>
   <form action="" method="POST" id="form_login">
     <div class="container">    
           <h1>Student Registration</h1>
           <hr>
           <div>
               <label for="name"><b>Name</b></label><br><br>
               <input type="text" placeholder="Enter Name" name="name" required>
           </div>
           <div>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Valid Email Id" name="email" required>
        </div>
        <div>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter password" name="password" required>

            
        </div>
        <div>
            <label for="phone"><b>Contact Number</b></label><br><br>
            <input type="tel" name="phone" placeholder=" Enter Mobile Number " pattern="[0-9]{10}" required>
        </div>
        <div>
            <label for="git"><b>Github Id</b></label><br><br>
            <input type="text" placeholder="Enter github Id" name="git" >
        </div>

        <div>

            <label for="clg"><b>College Name</b></label>
            <input type="text" placeholder="Enter College Name" name="college" required>
        </div>
        <div>
             <input type="submit" value='Register'> 
       </div>
       <div class="signin">
        <p>Already have an account? <a href="#">Sign in</a></p>

      </div>
</div>
       </form>
<?php
if(isset($_REQUEST['password']))
{
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $password=md5($_REQUEST['password']);
   $phone=$_REQUEST['phone'];
   $git=$_REQUEST['git'];
   $college=$_REQUEST['college'];
   $username='S@'.$phone; 
   $con=mysqli_connect('localhost','root','','evento');
   $query="insert into student values (null,'$name','$username','$password',$phone,'$email','$git','$college')";
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