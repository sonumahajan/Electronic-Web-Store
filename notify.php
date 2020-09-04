<?php
  include 'session.php';
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
        #search{ height:46px; width:453px;}
        #n{
        position:absolute;
        top:45px;
        left:100px;
        /* right:10px; */
        color:white;
    }
    .i1{
        position:absolute;
        top:160px;
        right:90px;
    }
    footer{top:70px;}
    .notytext{
        position:absolute;
        top:390px;
        right:30px;
    }
    .notytext h5{
        margin-left:100px;
        margin-top:30px;
    }
    .nnn{
        width:530px;
        margin-left:110px;
    }
    </style>
</head>
<body>
    <div class="header">
        <image id="logo" src="photos/logo.png"></image>
        <a href="home.php"><image id="home" src="photos/home.png"></image></a>
        <a href="#"><image id="bell" src="photos/bell1.png"></image></a>
        <a href="cart.php"><image id="cart" src="photos/cart.png"></image></a>
        <?php  if(isset($a)){ ?>
    <a href="logout.php"><image id="user" src="photo/logout.png"></image></a> 
    <p id="n"> <?php echo $a;  ?></p> 
    <?php } else { ?>
    <a href="index.php"><image id="user" src="photos/user.png"></image></a>
    <?php } ?>
        <a href="contect.php"><image id="call" src="photo/help.png"></image></a>
        <input id="search" type="text" placeholder="Type to Search">
        <div id="search1"><h1><center>GO</center></h1></div>
    </div><br>
    <br>
    <br>
    <br>
    <h1>&nbsp;&nbsp;Notifications :-</h1>
    <!-- <h5>&nbsp;&nbsp;&nbsp;&nbsp;Get Notification from Mystore</h5> -->
    <img class="i1" src="photo/bgnot.png">
<div class="nnn">
<h3>My Orders</h3>
<h4>Latest updates on your orders</h4><hr>
<h3>Reminders</h3>
<h4>Price Drops, Back-in-stock Products, etc.</h4><hr>
<h3>Recommendations by Flipkart</h3>
<h4>Products, offers and curated content based on your interest</h4><hr>
<h3>New Offers</h3>
<h4>Top Deals and more</h4><hr>
</div>


<div class="notytext">
    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oops! You are missing out on a lot of important<br>notifications.
    Please switch it on from Browser Settings.</h4>
    <h5>How to Unblock</br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-lock" style="font-size:24px"></i> > Notifications > Allow</h5>
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