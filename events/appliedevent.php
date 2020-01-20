<?php

    function formatDate($date)
    {
        return date('F j, Y, g:i a',strtotime($date));
    }
?>
<?php
    $id= $_GET['id'];
        $con = mysqli_connect('localhost','root','','evento');
        $query = "SELECT * FROM events where id=".$id;
        $rs = mysqli_query($con,$query);

        //Query from category table
        $query2 = "SELECT * FROM category";
        $rs2 = mysqli_query($con,$query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
    
 <div class="section">
 <h1>My Events</h1></br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Event Title</th>
                <th scope="col">Category</th>
                <th scope="col">Event Date</th>
             </tr>
        </thead>
        <?php while($row = mysqli_fetch_assoc($rs)): ?>
             <tr>
                <td><?php echo $row['id']; ?></a></td>
                <td><a href="status.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo formatDate($row['event_date']); ?></td>
            </tr>   
        <?php endwhile; ?>
    </table>

    <aside class="aside">
        <p class="categories">Categories</p>
            <ol>
                <?php while($row = mysqli_fetch_array($rs2)): ?>
                    <li><a class = "cat" href="appliedevent.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                <?php endwhile; ?>
            </ol>
    </aside>
    </div>

</body>
</html>
