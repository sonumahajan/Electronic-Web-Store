
<?php
  include 'session.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
<style>
    body{
        position:relative;
    }
    #search{ height:46px; width:452px;}
    .six{
    top:370px;
    }
    .one h1,.two h1,.three h1,.four h1,.five h1
    {
    top:305px; 
    }
    .one h1{
    color:rgb(10, 247, 81);
    }
    footer{
        top:1885px;
    }
    
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
        z-index:10;
        height:340px;
        width:240px;
        background-color:white;
        align-items: center;
        text-align: center;
        line-height:10px;
    }
    .div:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .div:hover img {
        height:60%;
        width:43%;
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
    .div .img{
        margin-top:20px;
        height:58%;
        width:auto;
    }
    .div .h2{
        font-size:27px;
    }
    .div .h4{
        color:rgb(119, 224, 119);
    }
    .div .p b{
        color:red;
        font-size:23px;
    }
    .div .p strike{
        color:rgb(81, 83, 85);
    }
    #n{
        position:absolute;
        top:45px;
        left:100px;
        /* right:10px; */
        color:white;
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
    <p id="n">  <?php echo $a;  ?></p> 
    <?php } else { ?>
    <a href="index.php"><image id="user" src="photos/user.png"></image></a>
    <?php } ?>
            <a href="contect.php"><image id="call" src="photo/help.png"></image></a>
            <input id="search" type="text" placeholder="Type to Search">
            <div id="search1"><h1><center>GO</center></h1></div>
        </div>
         
          <!-- product type list -->
          <div class="circle">
            <a href="#"><div class="one"><img src="photos/mobile.png"><h1>Mobile</h1></div></a>
            <a href="laptop.php"><div class="two"><img src="photos/laptop.png"><h1>Laptop</h1></div></a>
            <a href="toy.php"><div class="three"><img src="photos/toy.png"><h1>Toys</h1></div></a>
            <a href="beauty.php"><div class="four"><img src="photos/beauty.png"><h1>Beauty</h1></div></a>
            <a href="accessories.php"><div class="five"><img src="photos/powerbank.png"><h1>Accessories</h1></div></a>
        <div class="six"></div>
        </div> 
<form action="view.php" method="post">
         <!-- product list -->
        <div class="mone">
        <div class="div">
            <img class="img" src="photo/apple1.jpeg">
            <h2 class="h2">Iphone X</h2>
            <h4 class="h4">Face Lock</h4>
            <p class="p"><b>&#8377;54,999  </b><strike>&#8377;84,999</strike></p> 
            <input type="hidden" name="o" value="1"> 
            <button type="submit"  name="m1" class="button">View</button>
        </div></div>
        <div class="mtwo">
            <div class="div">
            <img class="img" src="photo/apple2.jpeg">
            <h2 class="h2">Iphone 8A</h2>
            <h4 class="h4">Rose Gold, 32GB</h4>
            <p class="p"><b>&#8377;19,999  </b><strike>&#8377;23,999</strike></p> 
            <input type="hidden" name="o" value="2"> 
            <button type="submit"  name="m2" class="button">View</button>  
        </div></div>
        <div class="mthree">
            <div class="div">
            <img class="img" src="photo/apple3.jpeg">
            <h2 class="h2">Iphone XS</h2>
            <h4 class="h4">Edge Display</h4>
            <p class="p"><b>&#8377;59,999  </b><strike>&#8377;89,999</strike></p>
            <input type="hidden" name="o" value="3"> 
            <button type="submit" name="m3" class="button">View</button>   
        </div></div>
        <div class="mfour">
            <div class="div">
            <img class="img" src="photo/apple4.jpeg">
            <h2 class="h2">Iphone 7</h2>
            <h4 class="h4">4500 mah Battery</h4>
            <p class="p"><b>&#8377;34,999  </b><strike>&#8377;37,900</strike></p>
            <button type="submit" name="m4" class="button">View</button>   
        </div></div>
        <div class="mfive">
            <div class="div">
            <img class="img" src="photo/apple5.jpeg">
            <h2 class="h2">Iphone 8</h2>
            <h4 class="h4">Silver, 64GB</h4>
            <p class="p"><b>&#8377;36,999  </b><strike>&#8377;39,999</strike></p>   
            <button type="submit" name="m5" class="button">View</button>        
        </div></div>
        <div class="msix">
            <div class="div">
                <img class="img" src="photo/mi1.jpeg">
                <h2 class="h2">Redmi Note 7</h2>
                <h4 class="h4">6GB RAM</h4>
                <p class="p"><b>&#8377;10,999  </b><strike>&#8377;16,999</strike></p> 
                <button type="submit" name="m6" class="button">View</button>    
            </div></div>
            <div class="mseven">
                <div class="div">
                <img class="img" src="photo/mi2.jpeg">
                <h2 class="h2">Redmi Note 8</h2>
                <h4 class="h4">6GB RAM,128Gb ROM</h4>
                <p class="p"><b>&#8377;14,259  </b><strike>&#8377;15,999</strike></p>
                <button type="submit" name="m7" class="button">View</button>     
            </div></div>
            <div class="meight">
                <div class="div">
                <img class="img" src="photo/mi3.jpeg">
                <h2 class="h2">Redmi 7S</h2>
                <h4 class="h4">5500 mah Battery</h4>
                <p class="p"><b>&#8377;11,999  </b><strike>&#8377;13,999</strike></p> 
                <button type="submit" name="m8" class="button">View</button>    
            </div></div>
            <div class="mnine">
                <div class="div">
                <img class="img" src="photo/mi4.jpeg">
                <h2 class="h2">Redmi F2</h2>
                <h4 class="h4">12MP Front Camera</h4>
                <p class="p"><b>&#8377;11,789  </b><strike>&#8377;13,999</strike></p> 
                <button type="submit" name="m9" class="button">View</button>    
            </div></div>
            <div class="mten">
                <div class="div">
                <img class="img" src="photo/mi5.jpeg">
                <h2 class="h2">Redmi GO</h2>
                <h4 class="h4">Finger Print</h4>
                <p class="p"><b>&#8377;4,299  </b><strike>&#8377;5,999</strike></p> 
                <button type="submit" name="m10" class="button">View</button>    
            </div></div>
            <div class="mone1">
                <div class="div">
                    <img class="img" src="photo/honor1.jpeg">
                    <h2 class="h2">Honor 7X</h2>
                    <h4 class="h4">Dual Camera</h4>
                    <p class="p"><b>&#8377;9,999  </b><strike>&#8377;12,999</strike></p>
                    <button type="submit" name="m11" class="button">View</button>     
                </div></div>
                <div class="mtwo1">
                    <div class="div">
                    <img class="img" src="photo/honor2.jpeg">
                    <h2 class="h2">Honor 20i</h2>
                    <h4 class="h4">24MP + 2PM + 8MP </h4>
                    <p class="p"><b>&#8377;10,999  </b><strike>&#8377;16,999</strike></p> 
                    <button type="submit" name="m12" class="button">View</button>    
                </div></div>
                <div class="mthree1">
                    <div class="div">
                    <img class="img" src="photo/honor3.jpeg">
                    <h2 class="h2">Honor 9N</h2>
                    <h4 class="h4">4500 mah Battery</h4>
                    <p class="p"><b>&#8377;10,999  </b><strike>&#8377;13,999</strike></p> 
                    <button type="submit" name="m13" class="button">View</button>    
                </div></div>
                <div class="mfour1">
                    <div class="div">
                    <img class="img" src="photo/honor4.jpeg">
                    <h2 class="h2">Honor 7C</h2>
                    <h4 class="h4">Dual Front camera</h4>
                    <p class="p"><b>&#8377;11,999  </b><strike>&#8377;13,999</strike></p>
                    <button type="submit" name="m14" class="button">View</button>     
                </div></div>
                <div class="mfive1">
                    <div class="div">
                    <img class="img" src="photo/honor5.jpeg">
                    <h2 class="h2">Honor 8 lite</h2>
                    <h4 class="h4">4500 mah Battery</h4>
                    <p class="p"><b>&#8377;8,999  </b><strike>&#8377;11,999</strike></p> 
                    <button type="submit" name="m15" class="button">View</button>    
                </div></div>
                <div class="msix1">
                    <div class="div">
                        <img class="img" src="photo/samsung1.jpeg">
                        <h2 class="h2">Samsung e3</h2>
                        <h4 class="h4">4 Gb RAM</h4>
                        <p class="p"><b>&#8377;11,999  </b><strike>&#8377;13,999</strike></p>
                        <button type="submit" name="m16" class="button">View</button>     
                    </div></div>
                    <div class="mseven1">
                        <div class="div">
                        <img class="img" src="photo/samsung2.jpeg">
                        <h2 class="h2">Samsung Metro</h2>
                        <h4 class="h4">5500 mah Battery</h4>
                        <p class="p"><b>&#8377;1,997  </b><strike>&#8377;3,000</strike></p>
                        <button type="submit" name="m17" class="button">View</button>     
                    </div></div>
                    <div class="meight1">
                        <div class="div">
                        <img class="img" src="photo/samsung3.jpeg">
                        <h2 class="h2">Samsung A71</h2>
                        <h4 class="h4">4500 mah Battery</h4>
                        <p class="p"><b>&#8377;11,999  </b><strike>&#8377;13,999</strike></p>
                        <button type="submit" name="m18" class="button">View</button>     
                    </div></div>
                    <div class="mnine1">
                        <div class="div">
                        <img class="img" src="photo/samsung4.jpeg">
                        <h2 class="h2">Samsung J2</h2>
                        <h4 class="h4">Snap Dragon33</h4>
                        <p class="p"><b>&#8377;6,789  </b><strike>&#8377;9,999</strike></p> 
                        <button type="submit" name="m19" class="button">View</button>    
                    </div></div>
                    <div class="mten1">
                        <div class="div">
                        <img class="img" src="photo/samsung5.jpeg">
                        <h2 class="h2">Samsung Guru</h2>
                        <h4 class="h4">4700 mah Battery</h4>
                        <p class="p"><b>&#8377;1,565  </b><strike>&#8377;5,999</strike></p> 
                        <button type="submit" name="m20" class="button">View</button>    
                    </div></div>
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