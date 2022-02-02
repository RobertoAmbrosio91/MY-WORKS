<?php

require_once 'unreghead.php';
require_once 'header.php';
?>

<div class="container">
    <div class="row">
        <?php
    require_once '../model/dbconn.php';
    $sql="SELECT users.userNo, users.username, users.email, users.pass, users.repass, products.productNo, products.productName, products.productDescription, products.productPrice, products.productPicture FROM users JOIN products ON users.userNo=products.userNo WHERE productPicture LIKE '%shirt%' ";
    $res=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_assoc($res)){
        ?>
        <div class="col-sm-4 prod">
        <img src="<?php echo $rows['productPicture'];?>"width="300" height="400" class="prodimg" alt=""><br>
        <?php echo $rows['productName']. "<br>";?>
        <?php echo $rows['productDescription']. "<br>";?>
         <?php echo "<b>" .$rows['productPrice']."</b>" ."<br>";?>
        <a href="loginpage.php" class="btn btn-success">Add to cart</a>
    </div>
    <?php
    }
    ?>
    </div>
</div>

<script src="../javascript/script.js"></script>


<?php
require_once 'footer.php';
?>