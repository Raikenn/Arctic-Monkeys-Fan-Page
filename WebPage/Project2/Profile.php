
<?php

session_start();
require_once('dbconnection.php');

















?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
  <section id ="navigation">
    <nav class="navbar navbar-expand-md navbar-inverse">
      <div class="container-fluid-nav text-center">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Arctic Monkeys</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-center">
            <li><a href="index.html">Home</a></li>
            <li><a href="Disco.html">Discography</a></li>
            <li><a href="Reg.php">Register</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </section>
  
<div class="container-fluid text-center">    
  <div class="row my-row">
    <div class="col-sm-5">
    </div>
    <div class="col-sm-5 text-left Text"> 
      <h1>Profile Page</h1>
      <h1>Welcome <?= $_SESSION['username'] ?></h1>
      
      
      
      
    </div>
  </div>
  <div class="row my-row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left Text"> 
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at sem sit amet ligula rutrum imperdiet eu at metus. Aliquam iaculis scelerisque lectus, sed faucibus sem convallis a. Praesent semper, dolor gravida fringilla tincidunt, dolor mi laoreet enim, non finibus purus neque sed mauris. Duis vel erat vitae mi luctus mollis. In dolor nulla, placerat nec nulla ut, aliquet varius arcu. In iaculis nec ante at venenatis. Integer nisi mi, volutpat in lectus sed, ullamcorper ullamcorper tortor. Vestibulum malesuada neque massa. Pellentesque id ante id ex posuere blandit nec at eros. Proin congue sodales placerat. </h3>
      
      

  </div>

</div>

</div>

</body>
</html>