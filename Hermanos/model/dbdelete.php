<?php
require_once 'dbconn.php';

if(isset($_GET['cartID'])){
    $id=$_GET['cartID'];
    $sql="DELETE FROM cart WHERE cartID='$id'";
    $res=mysqli_query($conn,$sql);

    if($res){
        header('Location: ../view/cart.php');
    }
    else{

    }
}


?>