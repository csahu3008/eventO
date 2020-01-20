
<?php

        if(isset($_REQUEST['add']))
        {
            $title = $_REQUEST['title'];
            $description = $_REQUEST['description'];
            $duration = $_REQUEST['duration'];
            $date = $_REQUEST['date'];
            $select = $_REQUEST['select'];

            $con = mysqli_connect('localhost' , 'root' , '' , 'evento'); 
            echo "<script>alert('d')</script>";
            if(!$con)
            {
                die("Error in connection");
                exit();
            }
            echo "<script>alert('d1')</script>";

            $query = "INSERT INTO events (title, description , category , college_id , event_date,event_duration) VALUES ($title','$description','$select',1, '$date','$duration')";
            $rs = mysqli_query($con,$query);
            echo "<script>alert('d3')</script>";

            if($rs)
            {            echo "<script>alert('d4')</script>";

                echo "<script>alert('Event Added');</script>";
            }
            else{
                echo "<script>alert('Error');</script>";
            }
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
        <input type="submit" placeholder="ADD" name = "add">
    </form>
</body>
</html>

