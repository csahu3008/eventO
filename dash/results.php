<?php
session_start();
$_SESSION['user']='C@1234';
if(isset($_SESSION['user']))
    {
    echo"$_SESSION[user]";
    $con=mysqli_connect('localhost','root','','evento');
    $query="SELECT e.title,e.description,e.category FROM events as e, applied as a WHERE e.id=a.event_id ";
    $res=mysqli_query($con,$query);
    echo "<table>";
    echo "<tr>";
    echo "<th>Event Title</th><th>Event Description</th><th>Category</th>"; 
    echo "</tr>";
    while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>$row[title]</td><td>$row[description]</td><td>$row[category]</td>";
        echo "</tr>";

        }
        echo "</table>";
}
?>