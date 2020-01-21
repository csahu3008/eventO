<?php
session_start();
if(isset($_SESSION['user']))
    {
    $con=mysqli_connect('localhost','root','','evento');
    $query="SELECT e.title,e.description,e.category,a.applied_time FROM events as e, applied as a WHERE e.id=a.event_id ";
    $res=mysqli_query($con,$query);
    echo"<table class='table table-striped'>";
    echo"<thead><th scope='col'>Title</th><th scope='col'>Description</th><th scope='col'>category</th><th scope='col'>Applied  Date</th></tr></thead><tbody>";
    while($row=mysqli_fetch_assoc($res)){
    echo"<tr><th scope='row'>$row[title]</th> <td>$row[description]</td> <td>$row[category]</td> <td>$row[applied_time]</td> </tr>";  
    }
    echo"</tbody></table>";
    }
?>
