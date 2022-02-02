<?php
session_start();
require_once 'head.php';
require_once 'innerheader.php';
require_once '../model/dbconn.php';

?>

<?php
if(isset($_POST['submit'])){
    $updatedName=$_POST['uname'];
    $updatedEmail=$_POST['email'];
    $updatedPassword=sha1($_POST['password']);
    $sql="UPDATE users SET username='$updatedName' , email='$updatedEmail', pass='$updatedPassword'  WHERE userNo='$id' ";
    $res=mysqli_query($conn,$sql);

    if($res){
        
        header('Location: ../index.php');
    }

    else{
        echo "not updated";
    }
}

?>




<div id="form-section" >
  <form method="post">

  <div class="regist"><h5>UPDATE PROFILE DATA</h5></div>
 
    <div class="form-group">
    <label for="uname">Username</label>
    <input type="text" class="form-control" id="uname" name="uname"  placeholder="Username" value="<?php echo $_SESSION['username'] ;?>">
    </div>
    
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email"  placeholder="Email" value="<?php echo $_SESSION['email'] ;?>" >
    </div>
    
    <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" name="password"  placeholder="Password">
    </div>
  	  <!-- <div class="form-group">
    <label for="repassword">Confirm Password</label>
    <input type="text" class="form-control" id="repassword" name="repassword"  placeholder="Confirm Password">
    </div> -->
    	
  <input type="submit" name="submit" class="subbtn" value="Update">  

</form>

</div>




<?php

require_once 'footer.php';
?>