<?php
session_start();
require_once 'head.php';
require_once 'innerheader.php';
require_once '../model/dbconn.php';
?>



<div class="row contact">
    <div class="col-sm-12 contact-form">

    <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
        </div>
        <div class="screen-body-item">
        

          <div class="app-form">
          <form action="" method="POST">
            <div class="app-form-group">   
             <input  type="text" class="app-form-control" name="username" placeholder="NAME" value="<?php echo $_SESSION['username'];?>">
            </div>
            <div class="app-form-group">
              <input type="text" class="app-form-control" name="email" placeholder="EMAIL" value="<?php echo $_SESSION['email'];?>">
            </div>
            <div class="app-form-group">
              <input type="text" class="app-form-control"name="contactNo" placeholder="CONTACT NO">
            </div>
            <div class="app-form-group message">
              <input type="text" class="app-form-control" name="message" placeholder="MESSAGE">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">CANCEL</button>
              <input class="app-form-button" type="submit" name="submit" value="SEND">
            </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
 
  </div>
</div>



    </div>
</div>

<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $useremail=$_POST['email'];
    $usercontactno=$_POST['contactNo'];
    $message=$_POST['message'];
    $sql="INSERT INTO usersmessages(userName,userEmail,userContactNo,userMessage)VALUES('$username','$useremail','$usercontactno','$message') ";
    $res=mysqli_query($conn,$sql);

    if($res){
        
        header('Location: homepage.php');
    }

    else{
        echo "message not sent";
    }
}

?>



<?php
require_once 'footer.php';
?>