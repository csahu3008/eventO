<?php
    $id= $_GET['id'];
        $con = mysqli_connect('localhost','root','','evento');
        $query = "SELECT * FROM events where id=".$id;
        $rs = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($rs);

        $query2 = "SELECT * FROM applied where event_id=".$id;
        $rs2 = mysqli_query($con,$query2);
        $row2 = mysqli_fetch_assoc($rs2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel = "stylesheet" href = "fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Cinzel|Luckiest+Guy|Macondo+Swash+Caps|Rock+Salt|Sniglet&display=swap" rel="stylesheet">
    <title>My Events</title>
</head>
<body>
<div class="nav">
                        <p class="logo">EV<-NT(O)</p>
                            <ul>
                                        <li><a href="addevent.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;ADD Events</a></li>
                                       <li> <a href="login.php"><i class="fas fa-compass"></i>&nbsp;&nbsp;&nbsp;Explore Events</a></li>
                                        <li><a href="logout.php" class="prolink"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                                        
                           </ul> 
                    </div>
                    </div>
    
                    <div class="section"><h1>My Events</h1>
    

    <?php echo "<h2>$row[title]</h2>"; ?>

    <p class="stat">No. of Participants:<?php echo mysqli_num_rows($rs2); ?></p></div>
    
</body>
</html>