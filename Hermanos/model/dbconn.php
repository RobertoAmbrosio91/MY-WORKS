<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="hermanos";

$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}
else{
   
}


?>