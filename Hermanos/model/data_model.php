<?php

 function register_user( $uname,$email,$password,$repassword){
    $password=sha1($password);
    $repassword=sha1($repassword);

    require_once 'dbconn.php';

    $sql="INSERT INTO users(username,email,pass,repass) VALUES ( '$uname','$email','$password','$repassword')";
    $res=mysqli_query($conn,$sql);
    if($res){
        
    }
    else{
        echo "registration failed ". mysqli_error($conn);
    }
 } 


 function user_login($uname,$email,$password){
    $password=sha1($password);

    require_once 'dbconn.php';

    //check if does exist any users with this credentials

    $sql="SELECT * FROM users WHERE username='$uname'and email='$email'and pass='$password'";
    $result=mysqli_query($conn,$sql);
    $user_details=[];

    if(mysqli_num_rows($result)>0){
        $user_details=mysqli_fetch_assoc($result);
        return $user_details;
    }

    else{
        return false;
    }
 }


?>