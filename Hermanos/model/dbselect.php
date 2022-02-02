<?php
require_once 'dbconn.php';

function displayProduct(){
    getConnection();
    $sql="SELECT users.userNo, users.username, users.email, users.pass, users.repass, products.productNo, products.productName, products.productDescription, products.productPrice, products.productPicture FROM users JOIN products ON users.userNo=products.userNo";
    $res=mysqli_query($conn,$sql);
    return $res;
    
}
?>