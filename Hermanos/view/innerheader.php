<body>
  <div class="row">
    <div class="col-sm-12">

  

<header id="myheader" class="myheader">
    <div class="backg-ship">
    <p class="free-ship">Free shipping on all orders </p>
    </div>

   

    <a class="herma" href="homepage.php"><h1 class="comp-name">HERMANOS</h1></a>
    
    <a class="a underline-right" href="productpage.php">NEW COLLECTION</a>
    <a class="a underline-right" href="about.php">ABOUT</a>
    <a class="a underline-right" href="contact.php">CONTACT</a>

<div class="cart-container">
    

<div class="dropdown">
  <button class="dropbtn">
      <?php
    echo "<b>".$_SESSION['username']."</b>";
    
    ?>
    </button>
  <div class="dropdown-content">
    <a href="../control/logout.php" >Logout</a>
    <a href="updateprofile.php?userNo=<?php echo $_SESSION['userNo'];?>" >Update Profile</a>

  </div>
  
</div>




<div class="searchBox">
<input class="searchInput"type="text" name="" placeholder="Search">
<button class="searchButton" href="#">
<i class="fas fa-search"></i>
</button>
</div>

<a href="cart.php" class="btn-sm btn-dark">
<i class="fas fa-shopping-cart  "></i>
<span class="badge badge-light ">
 <?php
require_once '../model/dbconn.php';
 $id=$_SESSION['userNo'];
 $sql="SELECT SUM(quantity) AS total FROM products JOIN cart ON products.productNo=cart.productNo AND cart.userNo='$id'";
 $res=mysqli_query($conn,$sql);

 if(mysqli_num_rows($res)>0){
     $rows=mysqli_fetch_assoc($res);
     if($rows['total']!=NULL){
         echo "<b>". $rows['total']."</b>";
     }
     else{
         echo "0";
     }
 }
 ?>  
</span>
</a>


</div>



</header>


</div>
  </div>

