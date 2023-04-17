<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('dbconnection.php');

if (isset($_REQUEST['username'])){

  //declareing variables

$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($conn,$username);


$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn,$email);


$pwd = stripslashes($_REQUEST['Password']);
$pwd = mysqli_real_escape_string($conn,$pwd);
//hashing password before passing into db
$hash = password_hash($pwd, PASSWORD_DEFAULT);
$password = $hash;



$stmt = mysqli_prepare($conn, "SELECT username FROM users WHERE username = ?" );


mysqli_stmt_bind_param($stmt, 'ss', $username);
mysqli_stmt_execute($stmt);


$stmt = mysqli_prepare($conn, "INSERT INTO users (username, email, Password) VALUES (?,?,?)");



mysqli_stmt_bind_param($stmt, 'sss', $username,$email,$password);


mysqli_stmt_execute($stmt);
header('Location: https://mayar.abertay.ac.uk/~1900829/Project2/RegSuccess.html');



mysqli_stmt_close($stmt);
mysqli_close($conn);

}

else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arctic Monkeys</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel ="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>



<nav class="navbar navbar-inverse">
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
        <li class="active"><a href="Reg.php">Register</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-5">
      
    </div>
    <div class="col-sm-5 text-left Text"> 
    <div id="form">
      <br><br><br><br>
      <form class="registration" action="" method="POST">
    <h1>Registration</h1>
    <input type="text" name="username" placeholder="Username" required /> <br> <br> 
    <input type="email" name="email" placeholder="Email" required /> <br> <br>
    <input type="password" name="Password" placeholder="Password" required /> <br> <br>
    <input type="submit" name="submit" value="Register" />
    <a href="Pics/GDPR.PNG" download>
    <p>Please See our GDPR <a href ="Pics/GDPR.PNG" download></a></p>
    </form>
</div>
    </div>
  </div>

</div>

<?php } ?>
</body>
</html>