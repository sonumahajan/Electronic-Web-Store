<?php
  include 'session.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        position:relative;
    }
    #search{ height:46px; width:452px;}
    .six{
    top:370px;
    }
    #n{
        position:absolute;
        top:45px;
        left:100px;
        /* right:10px; */
        color:white;
    }
    .one h1,.two h1,.three h1,.four h1,.five h1
    {
    top:305px; 
    }
    .three h1{
    color:rgb(10, 247, 81);
    } footer{top:1885px;}
    .mone,.mtwo,.mthree,.mfour,.mfive{
        position: absolute;
        top:420px;
    }
    .msix,.mseven,.meight,.mnine,.mten{
        position: absolute;
        top:778px;
    }
    .mone1,.mtwo1,.mthree1,.mfour1,.mfive1{
        position: absolute;
        top:1136px;
    }
    .msix1,.mseven1,.meight1,.mnine1,.mten1{
        position: absolute;
        top:1494px;
    }
    .mone,.msix,.mone1,.msix1{
        left:10px;
    }
    .mtwo,.mseven,.mtwo1,.mseven1{
        left:261px;
    }
    .mthree,.meight,.mthree1,.meight1{
        left:511px;
    }
    .mfour,.mnine,.mfour1,.mnine1{
        right:261px;
    }
    .mfive,.mten,.mfive1,.mten1{
        right:10px;
    }
    .div{
        height:340px;
        width:240px;
        background-color:white;
        align-items: center;
        text-align: center;
        line-height:17px;
    }
    .checked {
  color: orange;
    }
    .div:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .div:hover img {
        height:45%;
        width:90%;
    }
    .div .img{
        margin-top:20px;
        height:42%;
        width:87%;
    }
    .div .h2{
        font-size:15px;
    }
    .div .p b{
        color:red;
        font-size:23px;
    }
    .div .p strike{
        color:rgb(81, 83, 85);
    }
    .button{
        z-index:-10;
        position:absolute;
        top:10px; left:10px;
        height:30px;
        width:45px;
        border-radius:4px;
        background-color: white;
        color: rgb(232,67,67);
        border: 2px solid rgb(89, 89, 230) ;
    }
    .div:hover .button{
        z-index:20;
        
    }
</style>
    </head>
    <body>
          <!-- navigation bar -->
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
            <a href="contect.php"><image id="call" src="photo/help.png"></image></a>
            <input id="search" type="text" placeholder="Type to Search">
            <div id="search1"><h1><center>GO</center></h1></div>
        </div>
         
          <!-- product type list -->
          <div class="circle">
            <a href="mobile.php"><div class="one"><img src="photos/mobile.png"><h1>Mobile</h1></div></a>
            <a href="laptop.php"><div class="two"><img src="photos/laptop.png"><h1>Laptop</h1></div></a>
            <a href="#"><div class="three"><img src="photos/toy.png"><h1>Toys</h1></div></a>
            <a href="beauty.php"><div class="four"><img src="photos/beauty.png"><h1>Beauty</h1></div></a>
            <a href="accessories.php"><div class="five"><img src="photos/powerbank.png"><h1>Accessories</h1></div></a>
        <div class="six"></div>
        </div> 

        <!-- toys card -->
        <form action="view.php" method="post">
        <div class="mone">
            <div class="div">
                <img class="img" src="photo/toy1.jpeg">
                <h3 class="h2">AR Enterprises RC Jackman 1:18 Ferrari Style Racing Car with Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,343)</span>
                <p class="p"><b>&#8377;1,126  </b><strike>&#8377;1,999</strike></p>
                <button type="submit"  name="t1" class="button">View</button>  
            </div>
        </div>

        <div class="mtwo">
            <div class="div">
                <img class="img" src="photo/toy2.jpeg">
                <h3 class="h2">Miss & Chief Waterproof Remote Controlled Rock Crawler ...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,169)</span>
                <p class="p"><b>&#8377;999  </b><strike>&#8377;1,200</strike></p>  
                <button type="submit"  name="t2" class="button">View</button>  
            </div>
        </div>

        <div class="mthree">
            <div class="div">
                <img class="img" src="photo/toy3.jpeg">
                <h3 class="h2">Kiyara Collection Exceed (LH-1803) 2 in 1 Helicopter Fully Function</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(2,236)</span>
                <p class="p"><b>&#8377;745  </b><strike>&#8377;999</strike></p>  
                <button type="submit"  name="t3" class="button">View</button>  
            </div>
        </div>

        <div class="mfour">
            <div class="div">
                <img class="img" src="photo/toy4.jpeg">
                <h3 class="h2">Kiyara Collection Exceed (LH-1803) 2 in 1 Helicopter Fully Function</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,966)</span>
                <p class="p"><b>&#8377;984  </b><strike>&#8377;1,123</strike></p> 
                <button type="submit"  name="t4" class="button">View</button>   
            </div>
        </div>

        <div class="mfive">
            <div class="div">
                <img class="img" src="photo/toy5.jpeg">
                <h3 class="h2">Charnalia Singing Dancing Naughty robot Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,579)</span>
                <p class="p"><b>&#8377;685  </b><strike>&#8377;754</strike></p> 
                <button type="submit"  name="t5" class="button">View</button>   
            </div>
        </div>

        <div class="msix">
            <div class="div">
                <img class="img" src="photo/toy6.jpeg">
                <h3 class="h2">KM ROYALS Wired Remote Control Battery Operated JCB Cra...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,234)</span>
                <p class="p"><b>&#8377;875  </b><strike>&#8377;900</strike></p> 
                <button type="submit"  name="t6" class="button">View</button>   
            </div>
        </div>

        <div class="mseven">
            <div class="div">
                <img class="img" src="photo/toy7.jpeg">
                <h3 class="h2">Miss & Chief Waterproof Remote Controlled Rock Crawler ...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(325)</span>
                <p class="p"><b>&#8377;1,283 </b><strike>&#8377;1,999</strike></p> 
                <button type="submit"  name="t7" class="button">View</button>   
            </div>
        </div>

        <div class="meight">
            <div class="div">
                <img class="img" src="photo/toy8.jpeg">
                <h3 class="h2">Miss & Chief Waterproof Remote Controlled Rock Crawler ... </h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,728)</span>
                <p class="p"><b>&#8377;876  </b><strike>&#8377;900</strike></p>  
                <button type="submit"  name="t8" class="button">View</button>  
            </div>
        </div>

        <div class="mnine">
            <div class="div">
                <img class="img" src="photo/toy9.jpeg">
                <h3 class="h2">X ZINI HX750 Drone 2.6 Ghz 6 Channel Remote Control Qua Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,246)</span>
                <p class="p"><b>&#8377;826  </b><strike>&#8377;999</strike></p> \
                <button type="submit"  name="t9" class="button">View</button>   
            </div>
        </div>

        <div class="mten">
            <div class="div">
                <img class="img" src="photo/toy10.jpeg">
                <h3 class="h2">Miss & Chief Bugatti Transformer Car with Rechargeable ...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,343)</span>
                <p class="p"><b>&#8377;837  </b><strike>&#8377;963</strike></p> 
                <button type="submit"  name="t10" class="button">View</button>   
            </div>
        </div>

        <div class="mone1">
            <div class="div">
                <img class="img" src="photo/toy11.jpeg">
                <h3 class="h2">Ben 10 Rechargeable Stunt Car Big Size 360 Degree Rotat...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,774)</span>
                <p class="p"><b>&#8377;873  </b><strike>&#8377;900</strike></p> 
                <button type="submit"  name="t11" class="button">View</button>   
            </div>
        </div>

        <div class="mtwo1">
            <div class="div">
                <img class="img" src="photo/toy12.jpeg">
                <h3 class="h2">Miss & Chief 6 in 1 Double sided Stunt Car with Recharg...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(13,674)</span>
                <p class="p"><b>&#8377;532  </b><strike>&#8377;700</strike></p> 
                <button type="submit"  name="t12" class="button">View</button>   
            </div>
        </div>

        <div class="mthree1">
            <div class="div">
                <img class="img" src="photo/toy13.jpeg">
                <h3 class="h2">Miss & Chief 6 in 1 Double sided Stunt Car with Recharg...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(682)</span>
                <p class="p"><b>&#8377;837  </b><strike>&#8377;999</strike></p> 
                <button type="submit"  name="t13" class="button">View</button>   
            </div>
        </div>

        <div class="mfour1">
            <div class="div">
                <img class="img" src="photo/toy14.jpeg">
                <h3 class="h2">Kanchan Toys Steering Remote Car For Kids Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(3,446)</span>
                <p class="p"><b>&#8377;999  </b><strike>&#8377;1,199</strike></p> 
                <button type="submit"  name="t14" class="button">View</button>   
            </div>
        </div>

        <div class="mfive1">
            <div class="div">
                <img class="img" src="photo/toy15.jpeg">
                <h3 class="h2">Deep Remote Controlled Rock Crawler, RC Monster Truck Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(343)</span>
                <p class="p"><b>&#8377;1,271  </b><strike>&#8377;1,343</strike></p>  
                <button type="submit"  name="t15" class="button">View</button>  
            </div>
        </div>

        <div class="msix1">
            <div class="div">
                <img class="img" src="photo/toy16.jpeg">
                <h3 class="h2">Miss & Chief Venneno Style RC Car With Fully Function Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(6,445)</span>
                <p class="p"><b>&#8377;300  </b><strike>&#8377;463</strike></p>  
                <button type="submit"  name="t16" class="button">View</button>  
            </div>
        </div>

        <div class="mseven1">
            <div class="div">
                <img class="img" src="photo/toy17.jpeg">
                <h3 class="h2">Miss & Chief Ball Induction  (Multicolor)#JustHere Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(475)</span>
                <p class="p"><b>&#8377;845  </b><strike>&#8377;867</strike></p>  
                <button type="submit"  name="t17" class="button">View</button>  
            </div>
        </div>

        <div class="meight1">
            <div class="div">
                <img class="img" src="photo/toy18.jpeg">
                <h3 class="h2">Zurie Toy Collection Off Road Monster Racing Car, Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,346)</span>
                <p class="p"><b>&#8377;678  </b><strike>&#8377;890</strike></p> 
                <button type="submit"  name="t18" class="button">View</button>   
            </div>
        </div>

        <div class="mnine1">
            <div class="div">
                <img class="img" src="photo/toy19.jpeg">
                <h3 class="h2">Caraïbes Speed Helicopter with Gyroscope and LED Lights</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(443)</span>
                <p class="p"><b>&#8377;673  </b><strike>&#8377;700</strike></p> 
                <button type="submit"  name="t19" class="button">View</button>   
            </div>
        </div>

        <div class="mten1">
            <div class="div">
                <img class="img" src="photo/toy20.jpeg">
                <h3 class="h2">Bonkerz Remote Control Stunt Car Vehicle 360°Rotating Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,943)</span>
                <p class="p"><b>&#8377;493  </b><strike>&#8377;500</strike></p>  
                <button type="submit"  name="t20" class="button">View</button>  
            </div>
        </div>

</form>
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