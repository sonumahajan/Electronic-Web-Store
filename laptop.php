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
    .two h1{
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
        height:48%;
        width:93%;
    }
    .div .img{
        margin-top:20px;
        height:45%;
        width:90%;
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
            <a href="#"><div class="two"><img src="photos/laptop.png"><h1>Laptop</h1></div></a>
            <a href="toy.php"><div class="three"><img src="photos/toy.png"><h1>Toys</h1></div></a>
            <a href="beauty.php"><div class="four"><img src="photos/beauty.png"><h1>Beauty</h1></div></a>
            <a href="accessories.php"><div class="five"><img src="photos/powerbank.png"><h1>Accessories</h1></div></a>
        <div class="six"></div>
        </div> 

        <!-- laptop card -->
        <form action="view.php" method="post">
        <div class="mone">
            <div class="div">
                <img class="img" src="photo/dell1.jpeg">
                <h3 class="h2">Dell Vostro 3000 Core i3 8th Gen - (4 GB/1 TB HDD/Linux/Window/Dos) 3480 Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,343)</span>
                <p class="p"><b>&#8377;54,999  </b><strike>&#8377;84,999</strike></p>  
                <button type="submit"  name="l1" class="button">View</button> 
            </div>
        </div>

        <div class="mtwo">
            <div class="div">
                <img class="img" src="photo/dell2.jpeg">
                <h3 class="h2">Dell Inspiron 13 5000 Series Core i3 7th Gen - (4 GB/1 TB HDD/Windows 10 Home) 5378 2 in 1 Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,169)</span>
                <p class="p"><b>&#8377;44,999  </b><strike>&#8377;50,999</strike></p> 
                <button type="submit"  name="l2" class="button">View</button>   
            </div>
        </div>

        <div class="mthree">
            <div class="div">
                <img class="img" src="photo/dell3.jpeg">
                <h3 class="h2">Dell 14 3000 Core i3 7th Gen - (4 GB/1 TB HDD/Windows 10 Home/Dos) inspiron3481 Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(2,236)</span>
                <p class="p"><b>&#8377;37,999  </b><strike>&#8377;44,999</strike></p> 
                <button type="submit"  name="l3" class="button">View</button>   
            </div>
        </div>

        <div class="mfour">
            <div class="div">
                <img class="img" src="photo/dell4.jpeg">
                <h3 class="h2">Dell XPS 15 Core i9 9th Gen - (32 GB/1 TB SSD/Windows 10 Home/4 GB Graphics) 7590 Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,966)</span>
                <p class="p"><b>&#8377;49,999  </b><strike>&#8377;72,999</strike></p>
                <button type="submit"  name="l4" class="button">View</button>    
            </div>
        </div>

        <div class="mfive">
            <div class="div">
                <img class="img" src="photo/dell5.jpeg">
                <h3 class="h2">Dell Inspiron 13 5000 Core i5 8th Gen - (8 GB/256 GB SSD/Windows 10 Home) 5370 Thin and Light Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,579)</span>
                <p class="p"><b>&#8377;44,999  </b><strike>&#8377;64,999</strike></p>
                <button type="submit"  name="l5" class="button">View</button>    
            </div>
        </div>

        <div class="msix">
            <div class="div">
                <img class="img" src="photo/lenovo1.jpeg">
                <h3 class="h2">Lenovo Ideapad 130 APU Dual Core A6 - (4 GB/1 TB HDD/DOS/Windows 10) 130-15AST Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,234)</span>
                <p class="p"><b>&#8377;16,990  </b><strike>&#8377;24,999</strike></p> 
                <button type="submit"  name="l6" class="button">View</button>   
            </div>
        </div>

        <div class="mseven">
            <div class="div">
                <img class="img" src="photo/lenovo2.jpeg">
                <h3 class="h2">Lenovo Core i7 8th Gen - (8 GB/1 TB HDD/Windows 10 Home/2 GB Graphics) L340-15IWL Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(325)</span>
                <p class="p"><b>&#8377;52,990  </b><strike>&#8377;64,999</strike></p>  
                <button type="submit"  name="l7" class="button">View</button>  
            </div>
        </div>

        <div class="meight">
            <div class="div">
                <img class="img" src="photo/lenovo3.jpeg">
                <h3 class="h2">Lenovo Legion Y530 Core i5 8th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics Geforce </h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,728)</span>
                <p class="p"><b>&#8377;55,990  </b><strike>&#8377;65,999</strike></p>  
                <button type="submit"  name="l8" class="button">View</button>  
            </div>
        </div>

        <div class="mnine">
            <div class="div">
                <img class="img" src="photo/lenovo4.jpeg">
                <h3 class="h2">Lenovo Ideapad S145 Ryzen 3 Dual Core - (4 GB/1 TB HDD/Windows 10 Home) S145-15API Thin and Light Lapt...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,246)</span>
                <p class="p"><b>&#8377;24,990  </b><strike>&#8377;34,999</strike></p> 
                <button type="submit"  name="l9" class="button">View</button>   
            </div>
        </div>

        <div class="mten">
            <div class="div">
                <img class="img" src="photo/lenovo5.jpeg">
                <h3 class="h2">Lenovo Yoga 730 Core i7 8th Gen - (8 GB/512 GB SSD/Windows 10 Home) 730-13IKB Thin and Light Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,343)</span>
                <p class="p"><b>&#8377;79,990  </b><strike>&#8377;84,999</strike></p>
                <button type="submit"  name="l10" class="button">View</button>    
            </div>
        </div>

        <div class="mone1">
            <div class="div">
                <img class="img" src="photo/ipad1.jpeg">
                <h3 class="h2">Apple MacBook Air Core i5 8th Gen - (8 GB/256 GB SSD/Mac OS Mojave) A1932</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,774)</span>
                <p class="p"><b>&#8377;1,09,990  </b><strike>&#8377;1,11,990</strike></p> 
                <button type="submit"  name="l11" class="button">View</button>   
            </div>
        </div>

        <div class="mtwo1">
            <div class="div">
                <img class="img" src="photo/ipad2.jpeg">
                <h3 class="h2">Apple MacBook Air Core i5 5th Gen - (8 GB/128 GB SSD/Mac OS Sierra) A1466</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(13,674)</span>
                <p class="p"><b>&#8377;75,990  </b><strike>&#8377;84,999</strike></p> 
                <button type="submit"  name="l12" class="button">View</button>   
            </div>
        </div>

        <div class="mthree1">
            <div class="div">
                <img class="img" src="photo/ipad3.jpeg">
                <h3 class="h2">Apple MacBook Air Core i5 8th Gen - (8 GB/256 GB SSD/Mac OS Mojave) MREF2HN</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(682)</span>
                <p class="p"><b>&#8377;1,27,990  </b><strike>&#8377;1,34,999</strike></p>
                <button type="submit"  name="l13" class="button">View</button>    
            </div>
        </div>

        <div class="mfour1">
            <div class="div">
                <img class="img" src="photo/ipad4.jpeg">
                <h3 class="h2">New Apple MacBook Pro (13-inch, 8GB RAM, 128GB Storage, 1.4GHz Intel Core i5) - Space Grey</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(3,446)</span>
                <p class="p"><b>&#8377;54,999  </b><strike>&#8377;84,999</strike></p> 
                <button type="submit"  name="l14" class="button">View</button>   
            </div>
        </div>

        <div class="mfive1">
            <div class="div">
                <img class="img" src="photo/ipad5.jpeg">
                <h3 class="h2">Apple MacBook Pro Core i5 7th Gen - (8 GB/128 GB SSD/Mac OS Sierra) MPXQ2HN/A</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(343)</span>
                <p class="p"><b>&#8377;1,27,999  </b><strike>&#8377;1,34,999</strike></p>
                <button type="submit"  name="l15" class="button">View</button>    
            </div>
        </div>

        <div class="msix1">
            <div class="div">
                <img class="img" src="photo/hp1.jpeg">
                <h3 class="h2">HP 15q Core i3 7th Gen - (8 GB/1 TB HDD/DOS/Windows 10/Dos/Linux) 15q-ds0017TU Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(6,445)</span>
                <p class="p"><b>&#8377;30,990  </b><strike>&#8377;44,999</strike></p> 
                <button type="submit"  name="l16" class="button">View</button>   
            </div>
        </div>

        <div class="mseven1">
            <div class="div">
                <img class="img" src="photo/hp2.jpeg">
                <h3 class="h2">HP 15q Ryzen 3 Dual Core - (4 GB/1 TB HDD/Windows 10 Home/Linus/Dos) 15q-dy0004au Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(475)</span>
                <p class="p"><b>&#8377;27,990  </b><strike>&#8377;34,999</strike></p>
                <button type="submit"  name="l17" class="button">View</button>    
            </div>
        </div>

        <div class="meight1">
            <div class="div">
                <img class="img" src="photo/hp3.jpeg">
                <h3 class="h2">HP Pavilion 15-EC Ryzen 5 Quad Core - (8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/3 GB Graphics</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,346)</span>
                <p class="p"><b>&#8377;49,999  </b><strike>&#8377;54,999</strike></p> 
                <button type="submit"  name="l18" class="button">View</button>   
            </div>
        </div>

        <div class="mnine1">
            <div class="div">
                <img class="img" src="photo/hp4.jpeg">
                <h3 class="h2">HP Vostro 3000 Core i3 8th Gen - (4 GB/1 TB HDD/Linux/Windows 10) 3480 Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(443)</span>
                <p class="p"><b>&#8377;54,999  </b><strike>&#8377;84,999</strike></p>
                <button type="submit"  name="l19" class="button">View</button>    
            </div>
        </div>

        <div class="mten1">
            <div class="div">
                <img class="img" src="photo/hp5.jpeg">
                <h3 class="h2">HP 15s Ryzen 3 Dual Core - (4 GB/256 GB SSD/Windows 10 Home) 15s-eq0007AU Thin and Light Laptop</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,943)</span>
                <p class="p"><b>&#8377;44,999  </b><strike>&#8377;50,999</strike></p>
                <button type="submit"  name="l20" class="button">View</button>    
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