<script> 
  upcoming=()=>{ console.log('clicked')};
  participate=(id)=>{
      console.log(id);
      fetch(`http://localhost/eventO/events/eventParticipate.php?id=${id}`).then(res=>
     console.log(res.text())
     ).catch(err=> console.log(err) );
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
