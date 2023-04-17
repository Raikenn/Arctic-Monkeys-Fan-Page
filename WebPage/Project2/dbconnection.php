<?php
$dbhost = "lochnagar.abertay.ac.uk";
$dbuser = "sql1900829";
$dbpass = "uPLmshAunICc";
$dbname = "sql1900829";

//create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// check connection
if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}



?>