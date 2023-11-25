<?php
$host="localhost";
$user="root";
$pass="";$db="library_system";
$con=mysqli_connect($host,$user,$pass,$db);
if ($con){
 echo "Login";
}
else
{
  echo "DB Not connected";
}
?>