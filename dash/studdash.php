<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "../events/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dashstyle.css">
    <title>EV<-NT(O) Student Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
    .events{
        font-family: 'Roboto', sans-serif;
    }
    .row{
        margin-top:50px;
        width:100%;
        height:400px;
    }
    .colmn1{
        width:75%;
        min-height:400px;
        float:left;
        margin-left:5%;
    

    }
    .box{
        width:auto;
        height:auto;
        border:2px solid black;
        margin-left: 30px;;
    }
    .colmn2{
        width:18%;
        height:400px;
        float:right;
        padding-top: 100px;
      
    }
    .events{
        display:flex;
        flex-grow: inherit;
        flex-wrap: nowrap;
        flex-flow: wrap;    
    }
    .elements{
        padding:15px;
        margin-left:3px;
    }
    .elements:hover{
        color:red;
    }
    button{
        outline: 0px;
        border:0px;
        padding:10px;
        background-color:gold;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
     }
     .bt {
      text-decoration: none;
          }
    .b{
        padding:5px;
        margin-left:10%;
        text-align:center;
    }
    
    .nav p img {
        width: 100px;
        height: auto;
    }
    </style>
</head>
    <script>
    $(document).ready(function(){
        $('.participated').on('click',function(e){
            e.preventDefault();
            $.ajax({
                url:'results.php',
                method:'get',
                data:{},
                success:function(data){
                       $('.colmn1').hide(500).html(data).show(500);
                },
                failure:function(xhr){
                      console.log(xhr.status);
                }

            })
        })   
    });
    </script>
<body>
        <div class="nav">
            <p><img src="./img/logo.png" alt="evento"></p>
            <div class="logout"><p><a href = "logout.php">Logout</a>&nbsp;<i class="fas fa-sign-out-alt"></i></p></div>
        </div>
        <div>
            <div class='row'>
            <div class='colmn1'>
           <h2 style='text-align: center;'>Upcoming Events</h2>
           <?php 
            $con=mysqli_connect('localhost','root','','evento');
            $query="select * from events";
            $res=mysqli_query($con,$query);
            echo"<div class='events'>";
            while($row=mysqli_fetch_array($res)){
            echo "<div class='box'>";
            echo"<div class='elements' style='text-align: center;'><div><h4>$row[title]<h4></div><p>$row[description]<span>$row[category]</span></p></tr>";
            echo"<div><button class='btn btn-success' onclick='participate($row[id])'>Participate Now</button>&nbsp;";

           echo"<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Get More Details</button><div class='modal fade' id='myModal'><div class='modal-dialog'><div class='modal-content'><div class='modal-header'><h4 class='modal-title'>$row[title]</h4><button type='button' class='close' data-dismiss='modal'>&times;</button></div><div class='modal-body'>$row[description]<div>Category:$row[category]</div><div>event_date:$row[event_date]</div></div><div class='modal-footer'><button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button> </div></div></div></div>";
    
           echo "</div></div></div>";
        }
            echo"</div>";
            ?>
            </div>
            <div class='colmn2'>
                <div class='b'><button class='btn btn-primary ' href="#">Categories</button></div>
                <div class='b'><button class='btn btn-primary  participated' >MY participations</button></div>
                <div class='b'><button class='btn btn-primary ' href="#">update Categories</button></div>
            </div>
            </div>
        </div>
</body>
</html>