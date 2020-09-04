<?php
    $con = mysqli_connect("localhost","root","","signup");
    if(!$con)
    {
        die("can't connect to server");
    }
    // if(!mysqli_select_db($con, 'signup'))
    // {
    //     echo "database not selected";
    // }
    $fname=mysql_real_escape_string(stripslashes(trim($_POST['f_name'])));
    $lname= mysql_real_escape_string(stripslashes(trim($_POST['l_name'])));
    $email= mysql_real_escape_string(stripslashes(trim($_POST['email'])));
    $mobile= mysql_real_escape_string(stripslashes(trim($_POST['mobile'])));
    $address= mysql_real_escape_string(stripslashes(trim($_POST['address'])));
    $pass= mysql_real_escape_string(stripslashes(trim($_POST['password'])));
    $repass= mysql_real_escape_string(stripslashes(trim($_POST['repassword'])));
    
    if($pass == $repass)
    {
    //   echo "password not match";
      if($fname!= "" && $lname !="" && $email!= "" && $mobile!= "" && $address!= "" && $pass!= "" && $repass!= "")
      {
    $sql = "INSERT INTO usertable(f_name, l_name, username, password, mobile, address) VALUES 
    ('$fname','$lname','$email','$pass','$mobile','$address')";
    if(mysqli_query($con, $sql)){
        header('location:index.php');
    }
    else{
        header('location:signup.php');
    }
    }
    }
   else{
       header('location:signup.php');
   }
   
?>