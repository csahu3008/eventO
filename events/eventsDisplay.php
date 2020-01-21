<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.4.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1 id="fg"></h1>
</body>
</html>
<script> 
  upcoming=()=>{ console.log('clicked')};
  participate=(id)=>{
      console.log(id);
      var get = id;
    //   fetch(`http://localhost/eventO/events/eventParticipate.php?id=${id}`).then(res=>
    //  alert(res.text())
    //  ).catch(err=> console.log(err) );
    $.post('eventParticipate.php',{key:get},function(data){
        $("#fg").html(data);
    })
  }
</script>
<?php
session_start();
if(isset($_SESSION['user']))
{   echo"<h3>Filter Results</h3>";
    echo"<input type='button' onclick='upcoming()' value='get Upcoming Events'>";
    $con=mysqli_connect('localhost','root','','evento');
    $query="select * from events";
    $res=mysqli_query($con,$query);
    echo"<div>";
 
    while($row=mysqli_fetch_array($res)){
       echo"<div><h2>$row[title]<h2></div><p>$row[description]<span>$row[category]</span></p></tr>";
       echo"<div><button onclick='participate($row[id])'>Participate Now</button>&nbsp;<button>Description</button></div>";
    }
    echo"</div>";


}
else
{
    echo"<script>window.location='../registration/login.php'</script>";
}
?>

