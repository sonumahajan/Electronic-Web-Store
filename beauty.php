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
    .four h1{
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
        height:45%;
        width:65%;
    }
    .div .img{
        margin-top:20px;
        height:42%;
        width:63%;
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
            <a href="#"><div class="four"><img src="photos/beauty.png"><h1>Beauty</h1></div></a>
            <a href="accessories.php"><div class="five"><img src="photos/powerbank.png"><h1>Accessories</h1></div></a>
        <div class="six"></div>
        </div> 

        <!-- beauty product list  -->
        <form action="view.php" method="post">
        <div class="mone">
            <div class="div">
                <img class="img" src="photo/bty1.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,343)</span>
                <p class="p"><b>&#8377;1,126  </b><strike>&#8377;1,999</strike></p>
                <button type="submit"  name="b1" class="button">View</button>    
            </div>
        </div>

        <div class="mtwo">
            <div class="div">
                <img class="img" src="photo/bty2.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP 8202...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,169)</span>
                <p class="p"><b>&#8377;999  </b><strike>&#8377;1,200</strike></p> 
                <button type="submit"  name="b2" class="button">View</button>   
            </div>
        </div>

        <div class="mthree">
            <div class="div">
                <img class="img" src="photo/bty3.jpeg">
                <h3 class="h2">MoveOn Mhe-550- Shaver For Men (Multi Colour) Cordless ...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(2,236)</span>
                <p class="p"><b>&#8377;745  </b><strike>&#8377;999</strike></p> 
                <button type="submit"  name="b3" class="button">View</button>   
            </div>
        </div>

        <div class="mfour">
            <div class="div">
                <img class="img" src="photo/bty4.jpeg">
                <h3 class="h2">Braun 9-558 Cordless Epilator
                    White, Blue</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(3,966)</span>
                <p class="p"><b>&#8377;984  </b><strike>&#8377;1,123</strike></p> 
                <button type="submit"  name="b4" class="button">View</button>   
            </div>
        </div>

        <div class="mfive">
            <div class="div">
                <img class="img" src="photo/bty5.jpeg">
                <h3 class="h2">Antique Buyer Women's Painless Hair Remover Machine Cor...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,579)</span>
                <p class="p"><b>&#8377;685  </b><strike>&#8377;754</strike></p> 
                <button type="submit"  name="b5" class="button">View</button>   
            </div>
        </div>

        <div class="msix">
            <div class="div">
                <img class="img" src="photo/bty6.jpeg">
                <h3 class="h2">VEGA VHES-02 Cordless Epilator
                    White, Green</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,234)</span>
                <p class="p"><b>&#8377;875  </b><strike>&#8377;900</strike></p>  
                <button type="submit"  name="b6" class="button">View</button>  
            </div>
        </div>

        <div class="mseven">
            <div class="div">
                <img class="img" src="photo/bty7.jpeg">
                <h3 class="h2">shoppingdoor Eyebrow/Bikini/Face/Body Hair/Removal/Mach...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(325)</span>
                <p class="p"><b>&#8377;1,283 </b><strike>&#8377;1,999</strike></p> 
                <button type="submit"  name="b7" class="button">View</button>   
            </div>
        </div>

        <div class="meight">
            <div class="div">
                <img class="img" src="photo/bty8.jpeg">
                <h3 class="h2">BEAUTY FASHION Hair Straightener Hair Straightener Hair...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,728)</span>
                <p class="p"><b>&#8377;876  </b><strike>&#8377;900</strike></p>  
                <button type="submit"  name="b8" class="button">View</button>  
            </div>
        </div>

        <div class="mnine">
            <div class="div">
                <img class="img" src="photo/bty9.jpeg">
                <h3 class="h2">BEAUTY FASHION Hair Straightener Hair Straightener Hair...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(3,246)</span>
                <p class="p"><b>&#8377;826  </b><strike>&#8377;999</strike></p> 
                <button type="submit"  name="b9" class="button">View</button>   
            </div>
        </div>

        <div class="mten">
            <div class="div">
                <img class="img" src="photo/bty10.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP 8202...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,343)</span>
                <p class="p"><b>&#8377;837  </b><strike>&#8377;963</strike></p> 
                <button type="submit"  name="b10" class="button">View</button>   
            </div>
        </div>

        <div class="mone1">
            <div class="div">
                <img class="img" src="photo/bty11.jpeg">
                <h3 class="h2">BEAUTY FASHION Hair Straightener Hair Straightener Hair...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,774)</span>
                <p class="p"><b>&#8377;873  </b><strike>&#8377;900</strike></p> 
                <button type="submit"  name="b11" class="button">View</button>   
            </div>
        </div>

        <div class="mtwo1">
            <div class="div">
                <img class="img" src="photo/bty12.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP 8202...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(13,674)</span>
                <p class="p"><b>&#8377;532  </b><strike>&#8377;700</strike></p> 
                <button type="submit"  name="b12" class="button">View</button>   
            </div>
        </div>

        <div class="mthree1">
            <div class="div">
                <img class="img" src="photo/bty13.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP 8202...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(682)</span>
                <p class="p"><b>&#8377;837  </b><strike>&#8377;999</strike></p> 
                <button type="submit"  name="b13" class="button">View</button>   
            </div>
        </div>

        <div class="mfour1">
            <div class="div">
                <img class="img" src="photo/bty14.jpeg">
                <h3 class="h2">BEAUTY FASHION Hair Straightener Hair Straightener Hair...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><span>(3,446)</span>
                <p class="p"><b>&#8377;999  </b><strike>&#8377;1,199</strike></p>  
                <button type="submit"  name="b14" class="button">View</button>  
            </div>
        </div>

        <div class="mfive1">
            <div class="div">
                <img class="img" src="photo/bty15.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP 8202...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(343)</span>
                <p class="p"><b>&#8377;1,271  </b><strike>&#8377;1,343</strike></p>  
                <button type="submit"  name="b15" class="button">View</button>  
            </div>
        </div>

        <div class="msix1">
            <div class="div">
                <img class="img" src="photo/bty16.jpeg">
                <h3 class="h2">BEAUTY FASHION Hair Straightener Hair Straightener Hair...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(6,445)</span>
                <p class="p"><b>&#8377;300  </b><strike>&#8377;463</strike></p>  
                <button type="submit"  name="b16" class="button">View</button>  
            </div>
        </div>

        <div class="mseven1">
            <div class="div">
                <img class="img" src="photo/bty17.jpeg">
                <h3 class="h2">Nova Premium Silky Shine Hot And Cold Foldable NHP 8202...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(475)</span>
                <p class="p"><b>&#8377;845  </b><strike>&#8377;867</strike></p> 
                <button type="submit"  name="b17" class="button">View</button>   
            </div>
        </div>

        <div class="meight1">
            <div class="div">
                <img class="img" src="photo/bty18.jpeg">
                <h3 class="h2">BEAUTY FASHION Hair Straightener Hair Straightener Hair...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(2,346)</span>
                <p class="p"><b>&#8377;678  </b><strike>&#8377;890</strike></p> 
                <button type="submit"  name="b18" class="button">View</button>   
            </div>
        </div>

        <div class="mnine1">
            <div class="div">
                <img class="img" src="photo/bty19.jpeg">
                <h3 class="h2">Sanchh Creations SANCHHSE03 Cordless Epilator</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><span>(443)</span>
                <p class="p"><b>&#8377;673  </b><strike>&#8377;700</strike></p>  
                <button type="submit"  name="b19" class="button">View</button>  
            </div>
        </div>

        <div class="mten1">
            <div class="div">
                <img class="img" src="photo/bty20.jpeg">
                <h3 class="h2">UniqueBuyer Maxtop Easy and Instant Facial Hair Removal...</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><span>(1,943)</span>
                <p class="p"><b>&#8377;493  </b><strike>&#8377;500</strike></p> 
                <button type="submit"  name="b20" class="button">View</button>   
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