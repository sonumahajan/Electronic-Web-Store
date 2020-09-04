
<?php
  session_start();
$con =  mysqli_connect("localhost","root","","signup");
if(!$con){
    echo "connection faild";
}
else{
if(isset($_POST['go']))
{
    $uname=mysqli_real_escape_string($con,$_POST['username']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    if($uname!= "" && $pass !=""){
        $sql_query="select count(*) as cntUser from admintable where ad_user='".$uname."' and ad_pass='".$pass."'";
        $result=mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count>0){
            $_SESSION['login'] = 'yes';
            $_SESSION['uname'] = $uname;
            header('Location:adhome.php');
            die();
        }else{
            echo "invalid username and password";
        }
    }
}
}
?>
<html>
    <head>
        <title>
                https://codepen.io/sonumahajan/pen/XvxQQd
        </title>
        <script type="text/javascript" src="myscript.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    </head>
    <style>
    body{
        background:linear-gradient(90deg,rgb(107, 139, 241),rgb(204, 71, 204));
        text-align:center;
        font-family: 'Rubik', sans-serif;
    }
    .box{
        height:430px;
        width:600px;
        background-color:white;
        position:relative;
        top:75px;; left:345px;
        border-radius: 10px;
    }
    .logo{
        height:250px;
        position:absolute;
        top:90px; left:0px;
    }
    h1{
        position: absolute;
        top:30px; right:80px;
    }
    #email,#pass{
        position:absolute;
        top:115px; right:35px;
        height:35px;
        width:300px;
        border-radius:20px;
        border-style: none;
        background-color:rgb(197, 192, 192);
        padding:12px 20px;
        outline:none;
   }
   #email:hover{
       border:solid rgb(13, 224, 13);
   }
   #pass{
        top:178px; right:35px;
   }
   #pass:hover{
       border:solid rgb(13, 224, 13);
   }
   .login{
        position:absolute;
        top:240px; right:35px;
        height:35px;
        width:300px;
        border-radius:20px;
        border-style: none;
        background-color: rgb(13, 224, 13);
        color:white;
        outline:none;
   }
   .login:hover{
       opacity:0.6;
   }
   .forgot{
    position:absolute;
        top:290px; right:70px;
   }
   #UP:hover{
       color:red;
   }
   .create{
    position:absolute;
        top:365px; right:94px;
        color:rgb(13, 224, 13);
        text-decoration: none;
   }
   .create:hover{
       color:red;
   }
   .eye{
       position:absolute;
       right:50px;
       top:186px;
       font-size:20px;
       color: #999;
       z-index:100;
   }
   #eye1{
       display: none;
   }
    </style>
    <body>
        <form class="box" action="#" method="post">
            <img class="logo" src="photos/log.png">  
            <h1>Admin Login</h1>
            <input id="email" name="username" type="text" placeholder="Username" maxlengt="30" required>
            <br>
            <span class="eye" onclick="myFunction()">
            <i id="eye1" class="fa fa-eye"></i>
            <i id="eye2" class="fa fa-eye-slash"></i>
            </span>
            <input id="pass" name="password" type="password" placeholder="Password" maxlengt="12" required>
            <br>
            <input class="login" name="go" type="submit" value="LOGIN">

          <h4 class="forgot">Forgot <font id="UP"color="green;">Username / Password?</font></h4>

          <a class="create" href="index.php">&diams; For Customer Login &diams;</a> 
        </form>
    </body>
</html>