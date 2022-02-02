<?php

require_once '../model/data_model.php';


 if(isset($_POST['submit'])){

    if(empty($_POST['uname'] || $_POST['email'] || $_POST['password'] || $_POST['repassord'])){
        $err_name="<span class='error'>All field must be completed</span>";
        $has_error=true;
    }
    else if (is_numeric($_POST['uname'])){
        $err_name="<span class='error'>Username must contain only letters</span>";
        $has_error=true;
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $err_email="<span class='error'>Enter a valid email </span>";
        $has_error=true;
    }
    else if(!preg_match("#\d+#", user_input($_POST['password']))){
        $err_password="<span class='error'>Password must contain one digit</span>";
        $has_error=true;
    }
    else if(!preg_match("#[a-z]+#",user_input($_POST['password']))){
        $err_password="<span class='error'>Password must contain at least one letter</span>";
        $has_error=true;
    }
    else if ($_POST['password'] != $_POST['repassword']){
        $err_re_password="<span class'error'>Password does not match</span>";
        $has_error=true;
    }

    else{
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        register_user( $uname,$email,$password,$repassword);
        header('Location: loginpage.php');
    } 
 }

 function user_input($data){
     $data=trim($data);
     $data=stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
 }

?>