<?php
session_start();
header('Content-Type: application/json');

if(isset($_REQUEST['id']))
    {
    $con=mysqli_connect('localhost','root','','evento');
    $query="insert into applied (student_username,event_id,status) values ('$_SESSION[user]',$_REQUEST[id],1)";
    $res=mysqli_query($con,$query); 
    session_start();
    if($res){
    echo"<h1>FGHJKL:KJHG</h1>";
    }
    else{
    echo"<h1>FGHJKL:KJHG</h1>";
    }
}

?>