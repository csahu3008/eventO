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

   <form action="" method="POST" id="form_login">
     <div class="container">    
           <h1>Student Registration</h1>
           <hr>
           <div>
               <label for="name"><b>Name</b></label><br><br>
               <input type="text" placeholder="Enter Name" name="name" required><br>
           </div>
           <div>
            <label for="email"><b>Email</b></label><br><br>
            <input type="email" placeholder="Enter  Valid Email Id" name="email" required><br>
           </div>
        <div>
            <label for="psw"><b>Password</b></label><br><br>
            <input type="password" placeholder="Enter password" name="psw" required><br>
            
        </div>
        <div>
            <label for="phone"><b>Contact Number</b></label><br><br>
            <input type="tel" name="phone" placeholder=" Enter Mobile Number " pattern="[0-9]{10}" required><br>
        </div>
        <div>
            <label for="git"><b>Github Id</b></label><br><br>
            <input type="text" placeholder="Enter github Id" name="git" ><br>
        </div>

        <div>
            <label for="clg"><b>College Name</b></label><br><br>
            <input type="text" placeholder="Enter College Name" name="clg" required><br>
        </div>
        
        <button type="submit" class="registerbtn">Register</button>
       
       <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
      </div>
</div>
       </form>

</body>
</html>