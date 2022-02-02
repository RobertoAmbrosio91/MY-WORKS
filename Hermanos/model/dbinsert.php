<?php
session_start();

if(isset($_GET['productNo'] )){
$id=$_SESSION['userNo'];
$productNo=$_GET['productNo'];
require_once 'dbconn.php';
$sql="INSERT INTO cart(productNo,quantity,userNo)VALUES($productNo,1,$id)";
$res=mysqli_query($conn,$sql);
if($res){
    
header('Location: ../view/homepage.php');

}
else{

}
}

?>