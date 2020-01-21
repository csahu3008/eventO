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
    <link href="../bulma-0.8.0/css/bulma.min.css" rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
    .events{
        font-family: 'Roboto', sans-serif;
    }
    .row{
        margin-top:50px;
        width:100%;
        height:400px;
    }
    .col-1{
        width:80%;
        min-height:400px;
        float:left;
       border:1px solid red;

    }
    .box{
        width:auto;
        height:auto;
        border:2px solid black;
        margin-left: 30px;;
    }
    .col-2{
        width:18%;
        height:400px;
        float:right;
        padding-top: 100px;
        border:1px solid green;
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
                       $('.col-1').html(data);
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
            <div class='col-1'>
            <div>
           <h1>Upcoming Events</h1>
           <?php 
            $con=mysqli_connect('localhost','root','','evento');
            $query="select * from events";
            $res=mysqli_query($con,$query);
            echo"<div class='events'>";
            while($row=mysqli_fetch_array($res)){
            echo "<div class='box'>";
            echo"<div class='elements' style='text-align: center;'><div><h4>$row[title]<h4></div><p>$row[description]<span>$row[category]</span></p></tr>";
            echo"<div><button onclick='participate($row[id])'>Participate Now</button>&nbsp;<button>Description</button></div></div>";
            echo "</div>";
        }
            </div>
            echo"</div>";
            ?>
            </div>
            <div class='col-2'>
                <div class='b'><button class='button is-danger ' href="#">Categories</button></div>
                <div class='b'><button class='button is-danger participated ' >MY participations</button></div>
                <div class='b'><button class='button is-danger ' href="#">update Categories</button></div>
            </div>
            </div>
        </div>
</body>
</html>