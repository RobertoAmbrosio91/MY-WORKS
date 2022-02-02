

 <?php
session_start();

 require_once '../model/data_model.php';


if(isset($_POST['submit'])){


    if(empty($_POST['uname'] && $_POST['email'] && $_POST['password'] )){
        $err_name="<span class='error'>All field must be complited </span>";
        $has_error=true;
    }
    else if(is_numeric($_POST['uname'])){
        $err_name="<span class='error'>Username must contain at least one number</span>";
        $has_error=true;
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
        $err_email="<span class='error'>Enter a valid email </span>";
        $has_error=true;
    }
    else if(!preg_match("#\d+#", user_input($_POST['password']))){
        $err_password="<span class='error'>Password must contain at least one letter </span>";
        $has_error=true;
    }
   
    else{
     $uname=$_POST['uname'];
     $email=$_POST['email'];
    //  md5() is to encrypt the password in the database
     $password=$_POST['password'];
    
     
        
        if($user_details=user_login($uname,$email,$password)){
            
            $_SESSION['userNo']=$user_details['userNo'];
            $_SESSION['email']=$user_details['email'];
            $_SESSION['username']=$user_details['username'];
            $_SESSION['pass']=$user_details['pass'];
            // $_SESSION['repass']=$user_details['repass'];
            header ('Location: ../view/homepage.php');

        }

        else{
            $error_login="Invalid login details!";
        }
    }
}


function user_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}



?>