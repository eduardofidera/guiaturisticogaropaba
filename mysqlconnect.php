 
<?php
/**********MYSQL Settings****************/
$host="localhost";
$databasename="guiaturisticogrb";
$user="root";
$pass="";
/**********MYSQL Settings****************/


$con = mysqli_connect("$host","$user","$pass","$databasename");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>