<?php
include 'session.php';
$con =  mysqli_connect("localhost","root","","signup");
   
if(! $con ) {
   die('Could not connect: ' . mysql_error());
}

$cid = $_POST['hi_id'];
$sql_query = "insert into cart (c_user, c_id) values ('$a','$cid')";
if(!mysqli_query($con, $sql_query))
    {
         alert("not added");
    }
    if($cid<=20){
        header('location:mobile.php');
        }
        elseif($cid>20 and $cid<=40){
            header('location:laptop.php');
        }
        elseif($cid>40 and $cid<=60){
            header('location:toy.php');
        }
        elseif($cid>60 and $cid<=80){
            header('location:beauty.php');
        }
        elseif($cid>80 and $cid<=100){
            header('location:accessories.php');
        }

   ?>
        
  