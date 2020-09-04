<?php
  include 'session.php';
  $con =  mysqli_connect("localhost","root","","signup");
   
  if(! $con ) {
     die('Could not connect: ' . mysql_error());
  }
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        /* body{
            background-color:rgb(230, 232, 230);
        } */
        #search{ height:46px; width:453px;}
        #n{
        position:absolute;
        top:45px;
        left:100px;
        color:white;
    }
     .more0{
        position:absolute;
        top:200px;
        left:100px;
    }
    .more0 input{
        height:30px;
        width:900px;
        
    }
    .more0 button{
        height:30px;
        width:150px;  
        background-color:black;
        color:white;
        border-radius:4px;  
    }
    .more1,.more2{
        height:250px;
        width:450px;
        position:absolute;
        left:180px; top:300px;
    }
    .more2{
        left:780px;
    }
    h6{
        color:rgb(81, 83, 85);
    }
    footer{top:430px;}
    </style>
</head>
<body>
    <div class="header">
        <image id="logo" src="photos/logo.png"></image>
        <a href="home.php"><image id="home" src="photos/home.png"></image></a>
        <a href="notify.php"><image id="bell" src="photos/bell1.png"></image></a>
        <a href="cart.php"><image id="cart" src="photos/cart.png"></image></a>
        <?php  if(isset($a)){ ?>
    <a href="logout.php"><image id="user" src="photo/logout.png"></image></a> 
    <p id="n"> <?php echo $a;  ?></p> 
    <?php } else { ?>
    <a href="index.php"><image id="user" src="photos/user.png"></image></a>
    <?php } ?>
        <a href="#"><image id="call" src="photo/help.png"></image></a>
        <input id="search" type="text" placeholder="Type to Search">
        <div id="search1"><h1><center>GO</center></h1></div>
    </div><br><br><br><br><br>
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello. What can we help you with?</h1>
    <hr>
    <div class="more0">
    <h3>Find more solutions</h3>
    <form action="#" method="post">
    <input type="text" name="qry" placeholder="&nbsp;&nbsp;&nbsp;Search...">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="qryb">GO</button>
    </form>
    </div>
    <?php
    if(isset($_POST['qryb']))
    {
        $q = $_POST['qry'];
        $qr = "insert into query (q_user, q_query)values('$a','$q')";
        if(!mysqli_query($con, $qr))
    {  
        ?>
        <script>alert("Not send"); </script>
        <?php
    }else{
        ?>
        <script>alert("Wait for Responce"); </script>
        <?php
    }
    }
    ?>
    <div class="more1">
        <br>
      <h3>I want to track my order</h3>
      <h6>Check order status & call the delivery agent</h6>
      <h3>I want to manage my order</h3>
      <h6>Cancel, change delivery date & address</h6>
      <h3>I want help with returns & refunds</h3>
      <h6>Manage and track returns</h6>
    </div>
    <div class="more2">
        <br>
      <h3>I want help with other issues</h3>
      <h6>Offers, payment, Flipkart Plus & all other issues</h6>
      <h3>Want to reach us old style ?</h3>
      <h6>Here is ourpostal address</h6>
      <h3>I want help with returns & refunds</h3>
      <h6>Manage and track returns</h6>
    </div> 


    <footer>
    
    <ul class="ul1">
        <li><b>Userful Links</b></li><br>
        <li>Privacy Policy</li>
        <li>Terms of Use </li>
        <li>Return Policy</li>
        <li>Discount Coupons</li>
    </ul>
    <ul class="ul2">
        <li><b>Company</b></li><br>
        <li>About Us</li>
        <li>Contact Us</li>
        <li>Career</li>
        <li>Articals</li>
    </ul>
    <ul class="ul3">
        <li><b>Follow Us On</b></li><br>
        <li>Facebook</li>
        <li>Youtube</li>
        <li>Instagram</li>
        <li>Twitter</li>
    </ul>
    <ul class="ul4">
        <li><b>Download App</b></li>
        <img src="photos/download.png">
    </ul>
    <hr>
   <h3>&copy; Sonu and Aman 2020</h3>
</footer>
</body>
</html>