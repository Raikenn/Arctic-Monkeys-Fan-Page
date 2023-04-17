<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('dbconnection.php');
$_SESSION['message'] = '';
if (isset($_REQUEST['MyUsername']))
{
    $MyUsername = $pwd = '';
    $result = "";
    $MyUsername = stripslashes($_REQUEST['MyUsername']);
    $MyUsername = mysqli_real_escape_string($conn,$MyUsername);
    $pwd = stripslashes($_REQUEST['MyPassword']);
    $pwd = mysqli_real_escape_string($conn,$pwd);
  
    $sql = "SELECT * FROM users WHERE username='$MyUsername'";
    
    $result = mysqli_query($conn,$sql);
   
   
  if(mysqli_num_rows($result) > 0)
  {
     while ($row = mysqli_fetch_array($result))
    {

        if (password_verify($pwd, $row["Password"]))
        {
          ob_start();
          session_start();
            $_SESSION['username']=$MyUsername;
             header("location: https://mayar.abertay.ac.uk/~1900829/Project2/Profile.php");
        }
        else
        {
         header("location: https://mayar.abertay.ac.uk/~1900829/Project2/Login.php");
        
          
        }
  
    }
    
  }
  else
  {
    
    header("location: https://mayar.abertay.ac.uk/~1900829/Project2/Login.php");
    
  }



}
  else
  {
  
  
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arctic Monkeys</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <li><a href="Reg.php">Register</a></li>
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
    <h1>Login!</h1>
    <input type="text" name="MyUsername" placeholder="Username" required /> <br> <br> 
    <input type="password" name="MyPassword" placeholder="Password" required /> <br> <br>
    <input type="submit" name="submit" value="Login" />
    <p>Not registered yet? <a href ='Reg.php'>Register Here</a></p>
    </form>
</div>
    </div>
  </div>

</div>

<?php } ?>
</body>
</html>