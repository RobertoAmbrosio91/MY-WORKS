<?php
session_start();
require_once 'head.php';
require_once 'innerheader.php';
?>
<div class="row">
  <div class="col-sm-12">


  <div class="caro_container">


<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>  
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/img17.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

   

    <div class="carousel-item">
      <img src="../images/img6.jpg" class="d-block w-90" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/pexels-mike-250288.jpg" class="d-block  d-block2 w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>

</div>
</div>




<!-- <a href="" class="discover">NEW ARRIVALS</a> -->

<div class="row shop-categ">
  <div class="col-sm-5 shop-cat-inner">
    <div class="">
      <h2>Shop by category</h2>
    </div>
  </div>
</div>

<div class="row category-row">


<div class="col-sm-3 homeprod " >
  <a href="outfit.php">
  <figure class="catego">  
  <img id="outfit" class="inn-img" src="../images/outfit11.png" alt="" >
  <figcaption>
  <h2> <span>Outfits</span> </h2>
    <p>Discover all the outfits available </p>
</figcaption>
</figure>
  </a>
</div>


<div class="col-sm-3 homeprod"  >
<a href="trousers.php">
<figure class="catego">  
  <img id="trousers" class="inn-img" src="../images/trousers7.png" alt="" >
  <figcaption>
  <h2> <span>Trousers</span> </h2>
    <p>Discover the new trousers available </p>
</figcaption>
</figure>
</a>
</div>


<div class="col-sm-3 homeprod" >
  <a href="t-shirt.php">
<figure class="catego">  
  <img id="outfit" class="inn-img" src="../images/t-shirt-shirt7.png" alt="">
  <figcaption>
  <h2> <span>Shirts</span> </h2>
    <p>Discover the variety of t-shirts and shirts available </p>
</figcaption>
</figure>
</a>
</div>

</div>

<div class="row shop-categ new-arriv">
  <div class="col-sm-5 shop-cat-inner">
    <div class="">
      <h2>New Arrivals</h2>
    </div>
  </div>
</div>

<div class="row" style=" width:90%; margin:auto">
  <?php
    
    //  $res=displayProduct();
    require_once '../model/dbconn.php';
    $sql="SELECT users.userNo, users.username, users.email, users.pass, users.repass, products.productNo, products.productName, products.productDescription, products.productPrice, products.productPicture FROM users JOIN products  ON users.userNo=products.userNo ORDER BY RAND()  LIMIT 6";
    $res=mysqli_query($conn,$sql);
    
    // if($res->num_rows>0){
        while($rows=mysqli_fetch_assoc($res)){
    ?>
    <div class="col-sm-2 prod">
    <img src="<?php echo $rows['productPicture'];?>"width="150" height="220" class="prodimg" alt=""><br>
        <?php echo $rows['productName']. "<br>";?>
         <?php echo "<b>" .$rows['productPrice']."</b>" ."<br>";?>
        <a href="../model/dbinsert.php?productNo=<?php echo $rows['productNo'] && $rows['flag']=1;?>" class="btn btn-success">Add to cart</a>
    

  </div>
  <?php
        }

    ?>
</div>


<div class="row video-row">
  <div class="col-sm-12">
<video  autoplay muted loop>
  <source src="../video\9convert.com - BLACK Clothing Promotional Video.mp4">
</video>
</div>
</div>






<script src="../javascript/script.js"></script>


<?php
require_once 'footer.php';
?>

