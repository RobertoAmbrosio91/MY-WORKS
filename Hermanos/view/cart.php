<?php
session_start();
require_once 'head.php';
require_once 'innerheader.php';
// require_once '../model/dbselect.php';

?>


<div class="container">
    <div class="row">
        <?php
        require_once '../model/dbconn.php';
        $id=$_SESSION['userNo'];
        $sql="SELECT products.productNo,products.productName,products.productDescription,products.productPrice,products.productPicture,cart.cartID,cart.quantity FROM products JOIN cart ON products.productNo=cart.productNo WHERE cart.userNo='$id'";
        $res=mysqli_query($conn,$sql);

        if($res->num_rows>0){
            while($rows=mysqli_fetch_assoc($res)){
                ?>
                <div class="col-sm-4 prod">
                    <img src="<?php echo $rows['productPicture'];?>" width="300" height="400" alt=""><br>
                    <?php echo $rows['productDescription']. "<br>";?>
                    <?php echo $rows['productName']. "<br>";?>
                    <?php echo "<b>" .$rows['productPrice']."</b>" ."<br>";?>
                    <a href="../model/dbdelete.php?cartID=<?php echo $rows['cartID'];?>" class="btn btn-danger">Delete</a>
                </div>

                <?php
            }
        }
        ?>
    </div>
</div>

<script src="../javascript/script.js"></script>

<?php
require_once 'footer.php';
?>