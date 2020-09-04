<?php
require_once('viewfun.php');
include 'session.php';
error_reporting(0);
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#search{ height:46px; width:452px;}
footer{top:0px;
margin-top:200px;}
.img{
    position:relative;
    top:100px; left:20px;
    height:80%;
    width:35%;
    border:solid 2px rgb(89, 89, 230);
    align-items: center;
    text-align: center;
    line-height:10px;
}
.img1,.img2,.img3{
    position:relative;
    top:120px; left:20px;
    height:80%;
    width:38%;
    border:solid 2px rgb(89, 89, 230);
    align-items: center;
    text-align: center;
    line-height:10px;
}
#n{
        position:absolute;
        top:45px;
        left:100px;
        /* right:10px; */
        color:white;
    }
.img img{
    margin-top:4%;
    height:93%;
    width:auto;
}
.img:hover img{
        margin-top:3%;
        height:95%;
    }
.img1 img{
    margin-top:22%;
    height:auto;
    width:90%;
}
.img1:hover img,{
    margin-top:15%;
    width:100%;
}
.img2 img{
    margin-top:10%;
    height:auto;
    width:90%;
}
.img2:hover img{
    margin-top:8%;
    width:97%;
}
.img3 img{
    margin-top:10%;
    height:80%;
    width:80%;
}
.img3:hover img{
    margin-top:8%;
    width:87%;
}
.img:hover, .img1:hover,.img2:hover,.img3:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .content{
        position:absolute;
        top:100px; right:1px;
        height:71%;
        width:57%;
        float:right;
    }
    .checked {
  color: orange;
    }
    button{
        position:absolute;
        left:320px;
        width:200px;
        height:50px;
        border-radius:2px;
        font-size:22px;
        background-color: white;
        color: black;
        border: 2px solid rgb(232,67,67);
    }
    button:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .p b{
        color:red;
        font-size:23px;
    }
    .p strike{
        color:rgb(81, 83, 85);
    }
    label{margin-left:60px;}
    .qty{
        height:30px;
        width:70px;
        margin-left:10px;
        margin-top:10px;
    }
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
    <a href="contect.php"><image id="call" src="photo/help.png"></image></a>
    <input id="search" type="text" placeholder="Type to Search">
    <div id="search1"><h1><center>GO</center></h1></div>
</div>



<?php

$con =  mysqli_connect("localhost","root","","signup");
   
if(! $con ) {
   die('Could not connect: ' . mysql_error());
}
    if(isset($_POST['m1'])){
    $n = 1;
    }
    elseif(isset($_POST['m2'])){
    $n = 2;
    }
    elseif(isset($_POST['m3'])){
    $n = 3;
    }
    elseif(isset($_POST['m4'])){
    $n = 4;
    }
    elseif(isset($_POST['m5'])){
    $n = 5;
    }
    elseif(isset($_POST['m6'])){
    $n = 6;
    }
    elseif(isset($_POST['m7'])){
    $n = 7;
    }
    elseif(isset($_POST['m8'])){
    $n = 8;
    }
    elseif(isset($_POST['m9'])){
    $n = 9;
    }
    elseif(isset($_POST['m10'])){
    $n = 10;
    }
    elseif(isset($_POST['m11'])){
    $n = 11;
    }
    elseif(isset($_POST['m12'])){
    $n = 12;
    }
    elseif(isset($_POST['m13'])){
    $n = 13;
    }
    elseif(isset($_POST['m14'])){
    $n = 14;
    }
    elseif(isset($_POST['m15'])){
    $n = 15;
    }
    elseif(isset($_POST['m16'])){
    $n = 16;
    }
    elseif(isset($_POST['m17'])){
    $n = 17;
    }
    elseif(isset($_POST['m18'])){
    $n = 18;
    }
    elseif(isset($_POST['m19'])){
    $n = 19;
    }
    elseif(isset($_POST['m20'])){
    $n = 20;
    }

    // laptop 
    elseif(isset($_POST['l1'])){
    $n = 21;
    }
    elseif(isset($_POST['l2'])){
    $n = 22;
    }
        elseif(isset($_POST['l3'])){
        $n = 23;
        }
        elseif(isset($_POST['l4'])){
        $n = 24;
        }
        elseif(isset($_POST['l5'])){
        $n = 25;
        }
        elseif(isset($_POST['l6'])){
        $n = 26;
        }
        elseif(isset($_POST['l7'])){
        $n = 27;
        }
        elseif(isset($_POST['l8'])){
        $n = 28;
        }
        elseif(isset($_POST['l9'])){
        $n = 29;
        }
        elseif(isset($_POST['l10'])){
        $n = 30;
        }
        elseif(isset($_POST['l11'])){
        $n = 31;
        }
        elseif(isset($_POST['l12'])){
        $n = 32;
        }
        elseif(isset($_POST['l13'])){
        $n = 33;
        }
        elseif(isset($_POST['l14'])){
        $n = 34;
        }
        elseif(isset($_POST['l15'])){
        $n = 35;
        }
        elseif(isset($_POST['l16'])){
        $n = 36;
        }
        elseif(isset($_POST['l17'])){
        $n = 37;
        }
        elseif(isset($_POST['l18'])){
        $n = 38;
        }
        elseif(isset($_POST['l19'])){
        $n = 39;
        }
        elseif(isset($_POST['l20'])){
        $n = 40;
        }

        // toys
        elseif(isset($_POST['t1'])){
            $n = 41;
            }
            elseif(isset($_POST['t2'])){
            $n = 42;
            }
                elseif(isset($_POST['t3'])){
                $n = 43;
                }
                elseif(isset($_POST['t4'])){
                $n = 44;
                }
                elseif(isset($_POST['t5'])){
                $n = 45;
                }
                elseif(isset($_POST['t6'])){
                $n = 46;
                }
                elseif(isset($_POST['t7'])){
                $n = 47;
                }
                elseif(isset($_POST['t8'])){
                $n = 48;
                }
                elseif(isset($_POST['t9'])){
                $n = 49;
                }
                elseif(isset($_POST['t10'])){
                $n = 50;
                }
                elseif(isset($_POST['t11'])){
                $n = 51;
                }
                elseif(isset($_POST['t12'])){
                $n = 52;
                }
                elseif(isset($_POST['t13'])){
                $n = 53;
                }
                elseif(isset($_POST['t14'])){
                $n = 54;
                }
                elseif(isset($_POST['t15'])){
                $n = 55;
                }
                elseif(isset($_POST['t16'])){
                $n = 56;
                }
                elseif(isset($_POST['t17'])){
                $n = 57;
                }
                elseif(isset($_POST['t18'])){
                $n = 58;
                }
                elseif(isset($_POST['t19'])){
                $n = 59;
                }
                elseif(isset($_POST['t20'])){
                $n = 60;
                }
                elseif(isset($_POST['b1'])){
                    $n = 61;
                    }
                    elseif(isset($_POST['b2'])){
                    $n = 62;
                    }
                        elseif(isset($_POST['b3'])){
                        $n = 63;
                        }
                        elseif(isset($_POST['b4'])){
                        $n = 64;
                        }
                        elseif(isset($_POST['b5'])){
                        $n = 65;
                        }
                        elseif(isset($_POST['b6'])){
                        $n = 66;
                        }
                        elseif(isset($_POST['b7'])){
                        $n = 67;
                        }
                        elseif(isset($_POST['b8'])){
                        $n = 68;
                        }
                        elseif(isset($_POST['b9'])){
                        $n = 69;
                        }
                        elseif(isset($_POST['b10'])){
                        $n = 70;
                        }
                        elseif(isset($_POST['b11'])){
                        $n = 71;
                        }
                        elseif(isset($_POST['b12'])){
                        $n = 72;
                        }
                        elseif(isset($_POST['b13'])){
                        $n = 73;
                        }
                        elseif(isset($_POST['b14'])){
                        $n = 74;
                        }
                        elseif(isset($_POST['b15'])){
                        $n = 75;
                        }
                        elseif(isset($_POST['b16'])){
                        $n = 76;
                        }
                        elseif(isset($_POST['b17'])){
                        $n = 77;
                        }
                        elseif(isset($_POST['b18'])){
                        $n = 78;
                        }
                        elseif(isset($_POST['b19'])){
                        $n = 79;
                        }
                        elseif(isset($_POST['b20'])){
                        $n = 80;
                        }
                        elseif(isset($_POST['a1'])){
                            $n = 81;
                            }
                            elseif(isset($_POST['a2'])){
                            $n = 82;
                            }
                                elseif(isset($_POST['a3'])){
                                $n = 83;
                                }
                                elseif(isset($_POST['a4'])){
                                $n = 84;
                                }
                                elseif(isset($_POST['a5'])){
                                $n = 85;
                                }
                                elseif(isset($_POST['a6'])){
                                $n = 86;
                                }
                                elseif(isset($_POST['a7'])){
                                $n = 87;
                                }
                                elseif(isset($_POST['a8'])){
                                $n = 88;
                                }
                                elseif(isset($_POST['a9'])){
                                $n = 89;
                                }
                                elseif(isset($_POST['a10'])){
                                $n = 90;
                                }
                                elseif(isset($_POST['a11'])){
                                $n = 91;
                                }
                                elseif(isset($_POST['a12'])){
                                $n = 92;
                                }
                                elseif(isset($_POST['a13'])){
                                $n = 93;
                                }
                                elseif(isset($_POST['a14'])){
                                $n = 94;
                                }
                                elseif(isset($_POST['a15'])){
                                $n = 95;
                                }
                                elseif(isset($_POST['a16'])){
                                $n = 96;
                                }
                                elseif(isset($_POST['a17'])){
                                $n = 97;
                                }
                                elseif(isset($_POST['a18'])){
                                $n = 98;
                                }
                                elseif(isset($_POST['a19'])){
                                $n = 99;
                                }
                                elseif(isset($_POST['a20'])){
                                $n = 100;
                                }
$sql = "SELECT * FROM mobile WHERE pro_id=$n";
$retval = mysqli_query( $con, $sql);

if(mysqli_num_rows($retval)>0){
while($row = mysqli_fetch_array($retval)) {
    if($n<=20){
        viewfun($n,
                $row['pro_name'],
                $row['pro_rs'],
                $row['pro_review'],
                $row['pro_mrp'],
                $row['pro_img'],
                $row['pro_li1'],
                $row['pro_li2'],
                $row['pro_li3'],
                $row['pro_li4'],
                $row['pro_li5'] );
    }
    elseif($n>20 and $n<=40){
        viewfun1($n,
                $row['pro_name'],
                $row['pro_rs'],
                $row['pro_review'],
                $row['pro_mrp'],
                $row['pro_img'],
                $row['pro_li1'],
                $row['pro_li2'],
                $row['pro_li3'],
                $row['pro_li4'],
                $row['pro_li5'] );
    }
    // 
    elseif($n>40 and $n<=60){
        viewfun2($n,
                $row['pro_name'],
                $row['pro_rs'],
                $row['pro_review'],
                $row['pro_mrp'],
                $row['pro_img'],
                $row['pro_li1'],
                $row['pro_li2'],
                $row['pro_li3'],
                $row['pro_li4'],
                $row['pro_li5'] );
    }
    elseif($n>60){
        viewfun3($n,
                $row['pro_name'],
                $row['pro_rs'],
                $row['pro_review'],
                $row['pro_mrp'],
                $row['pro_img'],
                $row['pro_li1'],
                $row['pro_li2'],
                $row['pro_li3'],
                $row['pro_li4'],
                $row['pro_li5'] );
    }



}}




?>
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