<?php
session_start();
if(isset($_SESSION['user']))
{

}
else{
    echo"<script>window.location='../registration/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="addevent.php" method="post">
        <h1>Event Details</h1>

        <label><b>Event Title</b></label>
        <input type="text" placeholder="" name = "title" required>
        <br>
        <label><b>Description:-</b></label><br>
        <textarea name="description" rows="10" cols="30" placeholder="about 300 words"></textarea>
        <br>
        <label><b>Event Duration</b></label>
        <input type="text"  placeholder="" name = "duration" required>
        <br>
        <label><b>Date of Event</b></label>
        <input type="date" placeholder="" name = "date" required>
        <br>
        <label><b>Catergory</b></label>
        <select name = "select">
            <option selected>Add</option>
            <option >Workshop</option>
            <option >Club Events</option>
            <option >Hackathon</option>
        </select>
        <br>
        <input type="submit" placeholder="Add Event" name = "add">
    </form>

    <?php

if(isset($_REQUEST['add']))
{
    $title = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $duration = $_REQUEST['duration'];
    $dateEvent = $_REQUEST['date'];
    $select = $_REQUEST['select'];
    $dateAdded=date("Y-m-d H:i:s");
    $con = mysqli_connect('localhost' , 'root' , '' , 'evento'); 
    if(!$con)
    {
        die("Error in connection");
        exit();
    }
    $query = "insert into events (title,description,category,college_username,event_date,date_uploaded,event_duration) values ('$title','$description','$select','$_SESSION[user]','$dateEvent','$dateAdded','$duration')";
    $rs = mysqli_query($con,$query);
    if($rs)
    {
      //   echo"<script>console.log("data Updated successfully")</script>";
    }
    else
    {
       // echo"<script>console.log('data Updation failed')</script>";
    }
}
?>

</body>
</html>

