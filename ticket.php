<?php 

include('constants.php');
include('database.php');








?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
</head>

<style> 
 body{
        background-image: url(image/private-cinema.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    }
    a{

color: dodgerblue;
font-size:30px; 
}
    input{

font-size:25px;  

}
    p{
font-family: fantasy;
margin-left:15px;
color: forestgreen; 
font-size: 40px;
}
    .col{

font-size:35px; 
border-width: thick;
column-width: 200px; 
        align-content: center;
    }

</style>
<body>
<p> your ticket</p>
<form  action="form.php" method="post">

<div class="form-row" >
      
 <div class="col" align="center">
        <a>Your film:</a> <input type="text" >
    </div>
 <div class="col" align="center" >
     <a> Full name:</a> <input type="text" id=name  class="form-control" placeholder="First name" >
    </div>
    <div class="col" align="center">
        <a>Credit Card:</a> <output type="text" id=card class="form-control"  >
    </div>
<div class="col" align="center">
        <a>hall nom:</a> <output type="text" id=card class="form-control"  >
    </div>
<div class="col" align="center">
        <a>set_nom:</a> <ouput type="date" id=card class="form-control" >
    </div>
<div class="col" align="center">
        <a>DATE:</a> <output type="date" id=card class="form-control" >
    </div>
<div class="col" align="center">
        <a>str_time:</a> <ouput type="time" id=card class="form-control" >
    </div>
<div class="col" align="center">
        <a>End_time:</a> <output type="time" id=card class="form-control"  >
    </div>
<div class="col" align="center">
        <a>Price:</a> <input type="text" id=card class="form-control" >
    </div>






    </form>
</body>
</html>