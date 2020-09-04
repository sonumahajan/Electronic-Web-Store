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
  #n{
        position:absolute;
        top:45px;
        left:100px;
        /* right:10px; */
        color:white;
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
    #search{ height:46px; width:452px;}
    .six{
    top:370px;
    }
    .one h1,.two h1,.three h1,.four h1,.five h1
    {
    top:305px; 
    }
    .five h1{
    color:rgb(10, 247, 81);
    }
    footer{top:1885px;}
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
        height:53%;
        width:60%;
    }
    .div .img{
        margin-top:20px;
        height:50%;
        width:57%;
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
            <a href="toy.php"><div class="three"><img src="photos/toy.png"><h1>Toys</h1></div></a>
            <a href="beauty.php"><div class="four"><img src="photos/beauty.png"><h1>Beauty</h1></div></a>
            <a href="#"><div class="five"><img src="photos/powerbank.png"><h1>Accessories</h1></div></a>
        <div class="six"></div>
        </div> 


        <form action="view.php" method="post">
        <div class="mone">
            <div class="div">
                <img class="img" src="photo/acc1.jpeg">
                <h3 class="h2">AR Enterprises RC Jackman 1:18 Ferrari Style Racing Car with Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,343)</span>
                <p class="p"><b>&#8377;45  </b><strike>&#8377;50</strike></p> 
                <button type="submit"  name="a1" class="button">View</button>   
            </div>
        </div>

        <div class="mtwo">
            <div class="div">
                <img class="img" src="photo/acc2.jpeg">
                <h3 class="h2">Sauran Power Adaptor 12 Volt 2 Amp Fully Charger AC INPUT 100...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,169)</span>
                <p class="p"><b>&#8377;250  </b><strike>&#8377;300</strike></p>  
                <button type="submit"  name="a2" class="button">View</button>  
            </div>
        </div>

        <div class="mthree">
            <div class="div">
                <img class="img" src="photo/acc3.jpeg">
                <h3 class="h2">Kiyara Collection Exceed (LH-1803) 2 in 1 Helicopter Fully Function</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(2,236)</span>
                <p class="p"><b>&#8377;35  </b><strike>&#8377;50</strike></p> 
                <button type="submit"  name="a3" class="button">View</button>   
            </div>
        </div>

        <div class="mfour">
            <div class="div">
                <img class="img" src="photo/acc4.jpeg">
                <h3 class="h2">ROQ Smarty Universal Fully Flexible 360° Snake Style Stand f...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,966)</span>
                <p class="p"><b>&#8377;84  </b><strike>&#8377;123</strike></p> 
                <button type="submit"  name="a4" class="button">View</button>   
            </div>
        </div>

        <div class="mfive">
            <div class="div">
                <img class="img" src="photo/acc5.jpeg">
                <h3 class="h2">PAC IEC 320 C14 Male Plug to Fully Universal Female Jack AC Black</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,579)</span>
                <p class="p"><b>&#8377;85  </b><strike>&#8377;100</strike></p> 
                <button type="submit"  name="a5" class="button">View</button>   
            </div>
        </div>

        <div class="msix">
            <div class="div">
                <img class="img" src="photo/acc6.jpeg">
                <h3 class="h2">SmartBuy Edge To Edge Tempered Glass for emale Jack AC Lenov...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,234)</span>
                <p class="p"><b>&#8377;35  </b><strike>&#8377;90</strike></p> 
                <button type="submit"  name="a6" class="button">View</button>   
            </div>
        </div>

        <div class="mseven">
            <div class="div">
                <img class="img" src="photo/acc7.jpeg">
                <h3 class="h2">Zebronics ZEB-U725 UPS emale Jack AC 2356 Fully Fun...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(325)</span>
                <p class="p"><b>&#8377;1,283 </b><strike>&#8377;1,999</strike></p> 
                <button type="submit"  name="a7" class="button">View</button>   
            </div>
        </div>

        <div class="meight">
            <div class="div">
                <img class="img" src="photo/acc8.jpeg">
                <h3 class="h2">TechGear Universal Magic Suction Stand Mobile Phone Hol...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,728)</span>
                <p class="p"><b>&#8377;26  </b><strike>&#8377;40</strike></p> 
                <button type="submit"  name="a8" class="button">View</button>   
            </div>
        </div>

        <div class="mnine">
            <div class="div">
                <img class="img" src="photo/acc9.jpeg">
                <h3 class="h2">WD Pouch 2.5 inch Case / Pouch emale Jack AC Fully Functiona...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,246)</span>
                <p class="p"><b>&#8377;126  </b><strike>&#8377;399</strike></p> 
                <button type="submit"  name="a9" class="button">View</button>   
            </div>
        </div>

        <div class="mten">
            <div class="div">
                <img class="img" src="photo/acc10.jpeg">
                <h3 class="h2">M Mod Con 2 in 1 Silicone Washable Gel Pad Mobile Phone...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,343)</span>
                <p class="p"><b>&#8377;150  </b><strike>&#8377;196</strike></p> 
                <button type="submit"  name="a10" class="button">View</button>   
            </div>
        </div>

        <div class="mone1">
            <div class="div">
                <img class="img" src="photo/acc11.jpeg">
                <h3 class="h2">TESSCO LA-452 1.5 m AUX Cable Compatible with Mobile, Multicolor</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,774)</span>
                <p class="p"><b>&#8377;73  </b><strike>&#8377;90</strike></p>  
                <button type="submit"  name="a11" class="button">View</button>  
            </div>
        </div>

        <div class="mtwo1">
            <div class="div">
                <img class="img" src="photo/acc12.jpeg">
                <h3 class="h2">SmE 12V 1A Dual Pin Power Adapter, Input- 90V to 270V A...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(13,674)</span>
                <p class="p"><b>&#8377;232  </b><strike>&#8377;300</strike></p>
                <button type="submit"  name="a12" class="button">View</button>    
            </div>
        </div>

        <div class="mthree1">
            <div class="div">
                <img class="img" src="photo/acc13.jpeg">
                <h3 class="h2">Action Pro ACP00140 Mobile Holder Compatible fully with Mobile</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(682)</span>
                <p class="p"><b>&#8377;37  </b><strike>&#8377;59</strike></p>  
                <button type="submit"  name="a13" class="button">View</button>  
            </div>
        </div>

        <div class="mfour1">
            <div class="div">
                <img class="img" src="photo/acc14.jpeg">
                <h3 class="h2">BUY SURETY Good Quality Lazy Compatible Bracket Mobile Holder Clip...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(3,446)</span>
                <p class="p"><b>&#8377;99  </b><strike>&#8377;199</strike></p> 
                <button type="submit"  name="a14" class="button">View</button>   
            </div>
        </div>

        <div class="mfive1">
            <div class="div">
                <img class="img" src="photo/acc15.jpeg">
                <h3 class="h2">ROQ Smarty Universal Flexible 360° Snake Compatible Style Stand f...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(343)</span>
                <p class="p"><b>&#8377;90  </b><strike>&#8377;134</strike></p> 
                <button type="submit"  name="a15" class="button">View</button>   
            </div>
        </div>

        <div class="msix1">
            <div class="div">
                <img class="img" src="photo/acc16.jpeg">
                <h3 class="h2">ELV Portable Aluminium Mobile Stand with Mobile With Conveni...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(6,445)</span>
                <p class="p"><b>&#8377;30  </b><strike>&#8377;46</strike></p> 
                <button type="submit"  name="a16" class="button">View</button>   
            </div>
        </div>

        <div class="mseven1">
            <div class="div">
                <img class="img" src="photo/acc17.jpeg">
                <h3 class="h2">SmartBuy External Hard Disk Case 2.5 inch fully 5458 Hard...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(475)</span>
                <p class="p"><b>&#8377;184  </b><strike>&#8377;200</strike></p> 
                <button type="submit"  name="a17" class="button">View</button>   
            </div>
        </div>

        <div class="meight1">
            <div class="div">
                <img class="img" src="photo/acc18.jpeg">
                <h3 class="h2">SmartBuy Professional 6-in-1 Cleaning Kit with 53 fully (Air...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,346)</span>
                <p class="p"><b>&#8377;78  </b><strike>&#8377;89</strike></p>   
                <button type="submit"  name="a18" class="button">View</button> 
            </div>
        </div>

        <div class="mnine1">
            <div class="div">
                <img class="img" src="photo/acc19.jpeg">
                <h3 class="h2">webster Adjustable Portable Lightweight Camera Stand Tr...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(443)</span>
                <p class="p"><b>&#8377;173  </b><strike>&#8377;200</strike></p> 
                <button type="submit"  name="a19" class="button">View</button>   
            </div>
        </div>

        <div class="mten1">
            <div class="div">
                <img class="img" src="photo/acc20.jpeg">
                <h3 class="h2">Bonkerz Remote Control Stunt Car Vehicle 360°Rotating Rechargeable..</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,943)</span>
                <p class="p"><b>&#8377;193  </b><strike>&#8377;250</strike></p>  
                <button type="submit"  name="a20" class="button">View</button>  
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