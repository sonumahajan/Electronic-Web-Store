<?php
  include 'session.php';
  error_reporting(0);
  $con =  mysqli_connect("localhost","root","","signup");
  
if(! $con ) {
   die('Could not connect: ' . mysql_error());
}

$del = $_POST['del'];
$delid = $_POST['iid'];

   // $a is username of user ex.sample@gmail.com
if(isset($del)){
$sqlll = "DELETE FROM cart WHERE c_user='$a' AND c_id=$delid";

if (mysqli_query($con, $sqlll)) {
    header('location:cart.php');
    // echo "yes";
} else {
    header('location:cart.php');
    // echo "no";
}
}

?>