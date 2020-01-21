<?php
        $con = mysqli_connect('localhost','root','','evento');
        $q="SELECT*FROM events ORDER BY id DESC";
        $rs = mysqli_query($con,$q);
        $i=0;
        $j=0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Event-O</title>
</head>

<body>
    <header>
        <div class="containerz">
            <div class="logo">
                <img src="./img/logo.png" alt="evento">
            </div>
            <ul class="nav">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="reglog/login.php">Sign In</a></li>
            </ul>
        </div>
    </header>
    <div class="detail">
        <h1>All About Events</h1>
    </div>
    <div class="comt">
        <h2>Upcoming Events</h2>
    </div>

    <div class="container">
        <div class="row">
           

                <?php while(($row=mysqli_fetch_assoc($rs))){
                    $i++;
                   echo"  <div class='col-sm-4'>";      
                    echo "<div class='e'.$i>";
                            echo  "<h1>$row[title]</h1>";
                            echo  "<p>$row[description]</p>";
                            echo "<button type='submit' >Participate Now</button>";
                        echo "</div>";
                        if($i>2)
                        {
                        break;
                        }
                       echo" </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <p>Created by: <b>DAKSHA</b></p>
        <p>Contact information: <a href="mailto:anandmaya48@gmail.com">anandmaya48@gmail.com</a>.</p>
    </footer>
</body>

</html>