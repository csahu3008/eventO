<?php
session_start();
// header('Content-Type: application/json');

if(isset($_REQUEST['key']))
    {
    $con=mysqli_connect('localhost','root','','evento');
    $query="insert into applied (student_username,event_id,status) values ('$_SESSION[user]',$_REQUEST[key],1)";
    $res=mysqli_query($con,$query); 
    if($res){
    echo"Applied Successfully";
    return true;
    }
    else{
        echo"<script>alert('Error');</script>";
        return false;
    }
}

?>