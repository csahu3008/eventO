
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
       echo "<script>alert('Your are succesfully register and your user name is.$username')</script>";
   }
   else{
       echo"</script>alert('Registration unsuccessfull')</script>";
   }
}

?>
<!DOCTYPE html>
<html> 

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style1.css">
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="registration.css">
    <title>College Registration</title>
</head>
<body>
    <header>
    <img src="../img/logo.png" alt="" class = "img">
            <nav>
                <ul>
                    <li><a href = "login.php" class="log">Login</a></li>
                    <li><a href="studentRegistration.php" class="coll">Register As A Student</a></li>    
                </ul>
            </nav>
    </header>
    <section>
    
            <div class="form">
                <p class = "please">Fill The Details Of Your College</p>
                <form action="" method="POST" onsubmit="return checkAll()">
                    <!-- <label for="name">Company Name</label> -->
                    <input type="text" name="college_name" required id="name" placeholder = "College Name" class = "c-input">
                    <!-- <label for="yoe">Year of establishment</label> -->
                    <input type="text" name="college_address" required id="yoe" placeholder = "College Address" class = "y-input"><br><br>
                    <!-- <label for="address">Address</label> -->
                    <input type="text" name="university_name" required id="address" placeholder = "University Name" class = "c-input">
                    <!-- <label for="email">email</label> -->
                    <input type="text" name="phone" required id="phone" placeholder = "Contact" class = "y-input"><br><br>
                    <!-- <label for="phone">Phone</label> -->
                    <input type="password" name="password" required id="pwd" placeholder = "Password" class = "c-input">
                    <!-- <label for="city">City</label> -->
                    <input type="password" name="" required id="city" placeholder = "Renter Password" class= "y-input"><br><br>

                  
                    <button type="submit" class = "add-me" name = "submit">Submit</button>
                </form>
            </div>

            <div class="whos-div">
                <p class = "form-title">Register<br> As A<br><span>College</span></p>
            </div>
        
    </section>
    </body>

</html>
<script>
        function checkAll(){
            var phone = document.getElementById('phone').value;
            var pwd = document.getElementById('pwd').value;
            var name = document.getElementById("name").value;
            var nameregex = /^[a-z A-Z]*$/

            if(!(remail.test(email) && nameregex.test(name))){
                alert("Invalid Name or Email");
               return false;
            }else if(isNaN(phone)){
                alert("Mobile number should contain only digits.");
                return false;
            }else if(phone.length!=10){
                alert("Mobile number should contain 10 digits");
                return false;
            }else if(pwd.length<8){
                alert("Your password should contain atleast 8 characters");
                return false;
            }else{
                return true;
            }
        }
    </script>
