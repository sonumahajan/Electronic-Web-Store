
<html>
    <head>
       <script type="text/javascript" src="myscript.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    </head>
    <style>
    body{
        background:linear-gradient(90deg,rgba(94, 228, 53, 0.795),rgba(238, 58, 97, 0.822));
        text-align:center;
        font-family: 'Rubik', sans-serif;
    }

    .box{
        height:565px;
        width:435px;
        background-color:white;
        position:relative;
        top:20px; left:33%;
        border-radius: 10px;
    }
    h1,h4{
        position: absolute;
        top:5px; left:28px;
    }
    h4{
       top:50px; 
    }
    #email,#pass,#name,#sname,#pass1,#phone,#address{
        position:absolute;
        left:28px;
        height:35px;
        width:380px;
        border-radius:20px;
        border-style: none;
        background-color:rgb(197, 192, 192);
        padding:12px 20px;
        outline:none;
   }
   #name,#sname{
       top:115px; width:175px;
   }
   #sname{
       left:231px;
   }
   #email{
       top:168px;
   }
   #email:hover,#pass:hover,#name:hover,#sname:hover,#pass1:hover,#phone:hover,#address:hover{
       border:solid rgb(185, 52, 185);;
   }
   #pass{
       top:327px;
   }
   #pass1{
       top:380px;
   }
   #phone{
       top:221px;
   }
   #address{
       top:274px;
   }
   #term,#term1,#log{
       position:absolute;
       top:425px; left:50px;
   }
   #term1{
       top:415px; left:75px;
       font-size:12px;
   }
   .login{
        position:absolute;
        top:462px; left:28px;
        height:35px;
        width:380px;
        border-radius:20px;
        border-style: none;
        background-color: rgb(185, 52, 185);
        color:white;
        outline:none;
   }
   .login:hover{
       opacity:0.6;
   }
   #log{
       top:520px; left:80px;
   }
   #log a{text-decoration: none;}
   #up{
    color:lime;
    text-decoration: none;
   }
   #up:hover{
       color:red;
   }
   .eye{
       position:absolute;
       right:45px;
       top:334px;
       font-size:20px;
       color:#999;
       z-index:100;
   }
   #eye1{
       display: none;
   }
    </style>
    <body>
    
    <form class="box" action="sprocess.php" method="post">
            <h1>Sign Up</h1>
            <h4>Please fill in this form to create an account.</h4>
            <input  id="name" type="text" name="f_name" placeholder="First Name" minlength="3" required>
            <input id="sname" type="text" name="l_name" placeholder="Last Name" minlength="3" required>
            <input id="email" type="text" name="email" placeholder="Username" minlength="5" required>
            <br>
            <input id="phone" type="text" name="mobile" placeholder="Phone Number" minlength="10" maxlength="12" required>
            <br>
            <input id="address" type="textarea" name="address" placeholder="Address" minlength="10" required>
            <br>
            <span class="eye" onclick="myFunction1()">
            <i id="eye1" class="fa fa-eye"></i>
            <i id="eye2" class="fa fa-eye-slash"></i>
            <h1></h1>
            </span>
            <input id="pass" type="password" name="password" placeholder="Password" minlength="5" required>
            <br>
            <input id="pass1" type="password" name="repassword" placeholder="Confirm Password" minlength="5" required>
            <br>
            <input id="term" type="checkbox" required><p id="term1">I accept the <font id="up">Term of Use & Privacy Policy.</font></p>
            <input class="login" type="submit" name="don" value="Sign Up">
            <div id="log">Already have an account?<a href="index.php"> <font id="up">Login here. </font></a></div>
        </form>
    </body>
</html>