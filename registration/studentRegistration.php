<?php
if(isset($_REQUEST['submit']))
{
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $password=$_REQUEST['password'];
   $phone=$_REQUEST['phone'];
   $git=$_REQUEST['git'];
   $college=$_REQUEST['college'];
   $username='S@'.$phone; 
   $con=mysqli_connect('localhost','root','','evento');
   $query="insert into student values (null,'$name','$username','$password',$phone,'$email','$git','$college')";
   $res=mysqli_query($con,$query);
   if($res){
       echo "<script>alert('Your username is')</script>";
   }
   else{
       echo"updataion unsuccessfull";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Register</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>

    <header>
        <h2>#</h2>
        <nav>
            <ul>
                <li><a href = "login.php">Login</a></li>
                <li><a href="collegeRegistration.php">Register As A College</a></li>    
            </ul>
        </nav>
    </header>

    <section>
                <div class="who-div">
                    <p class = "form-title">Register<br> As A<br><span>Student</span></p>
                </div>

                <div class="form-div">

                    <form method = "POST" onsubmit = "return checkAll()" action="">

                        <!-- Personal Details -->

                        <p class = "personal">Fill the details</p></br></br>
                        
                        <div class="namediv">
                            <input autocomplete = "off" type="text" name = "name" id = "name" placeholder = "Student Name" required class = "name-input">
                            <!-- <label for="name" class = "full-name">Full Name</label> -->
                        </div>
    
<br><br>
                        <div class="emaildiv">
                            <input autocomplete = "off" type="text" name = "email" id = "email" placeholder = "Email" required class = "email-input">
                            <!-- <label for="email" class = "email">E-mail</label> -->
                        </div>
        <br><br>

                        <div class="passworddiv">
                            <input autocomplete = "off" type="password" name = "password" id = "password" placeholder = "Password" required class= "name-input">
                            <!-- <label for="password" class = "full-name">Password</label> -->
                        </div>
<br><br>

                            <div class="mobdiv">
                                <input autocomplete = "off" type="text" name = "phone" id = "mobile" placeholder = "Contact" class= "mobile-input" required>
                                <!-- <label for="mobile" class = "mobile">Mobile</label> -->
                            </div>
                        </div>
                    

                        <div class="locdiv">
                            <input autocomplete = "off" type="text" name = "git" id = "location" placeholder = "Git Hub Account" required class = "name-input">
                            <!-- <label for="location" class = "full-name curr">Current Location</label> -->
                        </div>

                        <!-- End of Personal Details -->

        <br><br>

                        <div class="high">
                            <input autocomplete = "off" type="text" name = "college" id = "qualification" placeholder = "College Name" required class = "mobile-input">
                            <!-- <label for="qualification" class = "full-name qual">Highest-Qualification</label> -->
                        </div>
                       

                        <input type="submit" value = "SignUp/Register" class = "submit-button" name="submit">
                    </form>
                </div>
    </section>


    <script>
        function checkAll(){
            var phone = document.getElementById('mobile').value;
            var pwd = document.getElementById('password').value;
            var name=document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var remail = /\S+@\S+\.\S+/
            var nameregex = /^[a-z A-Z]*$/

            if(isNaN(phone)){
                alert("Mobile number should contain only digits.");
                return false;
            }else if(phone.length!=10){
                alert("Mobile number should contain 10 digits");
                return false;
            }else if(pwd.length<8){
                alert("Your password should contain atleast 8 characters");
                return false;
            }else if(!(remail.test(email) && nameregex.test(name))){
                alert("Invalid Name and Email");
               return false;
            }
            else{
                return true;
            }
        }
    </script>
</body>
</html>
