<?php
require_once 'head.php';
require_once 'header.php';
require_once '../control/loginprocess.php';


?>




<div id="form-section" >
  <form method="post">

  <?php

if(isset($err_name)){
    echo '<div class="alert alert-error ">' .$err_name . '</div>';
}
if(isset($err_email)){
    echo '<div class="alert alert-error">' .$err_email .'</div>';
}
if(isset($err_password)){
    echo '<div class="alert alert-error">' . $err_password . '</div>';
}
if(isset($err_re_password)){
    echo '<div class="alert alert-error">' .$err_re_password . '</div>';
}
if(isset($error_login)){
  echo '<div class="alert alert-error">' . $error_login . '</div>';
}
?>
 
    <div class="form-group">
    <label for="uname">Username</label>
    <input type="text" class="form-control" id="uname" name="uname"  placeholder="Username">
    </div>
    
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email"  placeholder="Email">
    </div>
    
    <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" name="password"  placeholder="Password">
    </div>
   
    	
  <input type="submit" name="submit" class="subbtn" value="Login">  
  <p class="signinpara">You don't have an account yet?<a href="registerpage.php">   Sign Up</a></p>
</form>

</div>

<script src="../javascript/script.js"></script>



<?php
require_once 'footer.php';
?>