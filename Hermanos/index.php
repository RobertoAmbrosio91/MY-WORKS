<?php 
require_once 'view/unreghead.php';
?>
<body>

<div class="row">
    <div class="col-sm-12">



<header id="myheader" class="myheader">
    <div class="backg-ship">
    <p class="free-ship">Free shipping on all orders </p>
    </div>

   

    <a class="herma" href="index.php"><h1 class="comp-name">HERMANOS</h1></a>
    
    <a class="a underline-right" href="view/unregproductpage.php">NEW COLLECTION</a>
    <a class="a underline-right" href="view/unregabout.php">ABOUT</a>
    <a class="a underline-right" href="view/loginpage.php">CONTACT</a>

<div class="cart-container">
    

<div class="searchBox">
<input class="searchInput"type="text" name="" placeholder="Search">
<button class="searchButton" href="#">
<i class="fas fa-search"></i>
</button>
</div>
<a href="view/loginpage.php">
<button class="loginbtn" >
<i class="fas fa-sign-in-alt fa-2x  login"></i>
</button>
</a>




</div>



</header>

</div>
</div>




<?php
require_once 'view/unregistereduser.php';
require_once 'view/footer.php';
?>