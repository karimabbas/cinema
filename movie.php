<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>

<style>
    .navbar-brand{
text-align: center;
text-align-last: center;
font-size:50px;
font-family: fantasy; font-style: italic;
text-shadow: 2px 2px 8px #FF0000;
background-image:image(image/asd4.jpg);
    }
    .nav-item{
    
font-family:serif; font-size:23px; font-synthesis: weight;  
}

    .con{
background-color:firebrick;
background-size: cover;

}

    .card-title{
font-size:35px; 

    }
    .card-text{
font-size:20px;
font-family:sans-serif;
background-color: brown;
    }
 .card-footer{
font-family: cursive;
background-color: brown;
    }
    .card{

background-color: brown;
}

}
 
    </style>
<?php
include('constants.php');
include('database.php')

?>
<form action="form.php" method="post">     
<div>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color:firebrick">
<img src="image/download.png" style="width:200px;">

  <a class="navbar-brand" href="cinema.html">cinema on</a>
 <img src="image/download.png" style="width:200px;" >
</nav>
<div style="background-color:darkslateblue" >

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="image/images%20(3).jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fantastic</h5>
      <p class="card-text">talking about a girl with an incradibales power Reading screenplays provides an added benefit—allowing you and your brain to seeeven use them to their advantage. Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" name="a" class="btn btn-primary btn-lg">select </button></a>
    </div>
  </div>

<div class="card">
    <img class="card-img-top" src="image/b.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Wonder Woman</h5>
      <p class="card-text">talking about a girl with an incradibales power</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[1]?>" >select </button></a>
    </div>
  </div>

<div class="card">
    <img class="card-img-top" src="image/images%20(7).jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Minions</h5>
      <p class="card-text">talking about a girl with an incradibales power Reading screenplays provides an added benefit—allowing you and your brain to see proper formatting in action. It’s also vital for aspiring screenwriters to see the difference between how scenes play out on the page and how they play out on the screen. Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[2]?>" >select </button></a>
    </div>
  </div>

<div class="card"   >
    <img class="card-img-top" src="image/images%20(6).jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Where we blood again</h5>
      <p class="card-text">talking about a girl with an incradibales power Reading screenplays provides an added benefit—allowing you and your brain to see proper formatting in action. It’s also vital for aspiring screenwriters to see the difference between how scenes play out on the page and how they play out on the screen. Finally, while properir advantage. Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[3]?>" >select </button></a>
    </div>
  </div>
  
</div>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="image/b.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Wonder Women2</h5>
      <p class="card-text">talking about a girl with an incradibales power Reading screenplays provides an added benefit—allowing you and your brain to see proper formatting in action. It’s also vital for aspiring screenwriters to see the difference between how scenes play out on the page and how they play out on the screen. Finally, . Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[4]?>" >select </button></a>
    </div>
  </div>

<div class="card">
    <img class="card-img-top" src="image/m.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Revenge</h5>
      <p class="card-text">talking about a girl with an incradibales power Reading screenplays provides an added benefit—allowing you and your brain to see proper formatting in action. It’s also vital for aspiring screenwriters to see the difference between how scenes play out on the page and how they play out on the screen. Finally, while proper screenwriting adheres to a very rigid format, it’s extremely useful to see how various writers work within those rules and even use them to their advantage. Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[5]?>" >select </button></a>
    </div>
  </div>

<div class="card">
    <img class="card-img-top" src="image/c.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">X-men</h5>
      <p class="card-text">talking about a girl with an incradibales power it’s extremely useful to see how various writers work within those rules and even use them to their advantage. Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[6]?>" >select </button></a>
    </div>
  </div>

<div class="card"   >
    <img class="card-img-top" src="image/images%20(3).jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fantastic2</h5>
      <p class="card-text">talking about a girl with an incradibales power Reading screenplays provides an added benefit—allowing you and your brain to see proper formatting in action. It’s also vital for aspiring screenwriters to see the difference between how scenes play out on the page and how they play out on the screen. Finally, while proper screenwriting adheres to a very rigid format, it’s extremely useful to see how various writers work within those rules and even use them to their advantage. Even if you know exact</p>
    </div>
    <div class="card-footer">
        <a href="form.html"><button type="submit" class="btn btn-primary btn-lg" value="<?php echo $rows[7]?>" >select </button></a>
    </div>
  </div>
  
</div>

    </div>
      </div>

</form>




    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
