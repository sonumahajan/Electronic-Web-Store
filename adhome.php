<?php
include 'session.php';
$con =  mysqli_connect("localhost","root","","signup");
   
if(! $con ) {
   die('Could not connect: ' . mysql_error());
}
?>
<html>
    <head><title>admin pannel of my website.</title>
    <style>
    /* basic format for all body */
    html,body{
  min-width: 290px;
  color: #4d4e53;
  background-color:#ffffff;
  font-family: "Open Sans", Arial, sans-serif;
  line-height: 1.5;
}

#nav-bar{
  position:fixed;
  min-width:290px;
  top:0px;
  left:0px;
  width:300px;
  height:100%;
  border-right: solid;
  border-color: rgba(0, 22, 22, 0.4);
}
header{
  background: linear-gradient(to right, rgb(232,67,67),rgb(89, 89, 230));
  color:white;
  margin:10px;
  text-align:center;
  font-size:1.9em;
   font-weight: thin;

}
#main-doc header {
  color: white;
  text-align:center;
  margin: 0px;
}
#nav-bar ul {
  height: 88%;
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
}
#nav-bar li {
  color: rgb(173, 241, 64);
  border-top: 1px solid;
  list-style: none;
  position: relative;
  width: 100%;
}
#nav-bar a {
  display: block;
  padding: 10px 30px;
  color: #4d4e53;
  text-decoration: none;
  cursor: pointer;
}
#main-doc {
  position: absolute;
  top:0px;
  margin-left: 310px;
  padding: 20px;
  margin-bottom: 70px;
}
.main-section,.main-section1,.main-section2{
  width:920px;
}
.main-section1,.main-section2{
  position:absolute;
  top:1000px;
}
.main-section2{
  top:1900px;
}

 footer{
  position:relative;
  top:1900px;
  right:4px;
}
.title{
  background: linear-gradient(to right, rgb(232,67,67),rgb(89, 89, 230));
  color:white;
  margin:10px;
  text-align:center;
  font-size:1.9em;
   font-weight: thin;
   height:60px;
   width:940px;
   position:absolute;
   right:-10px;
   top:-10px;
}

    table {
  margin-top:70px;
}

table, th{
  border: 1px solid black;
}
th {
 
  height: 50px;
}
.top{color:red;}
</style>
    </head> <body> <nav id="nav-bar">
    <header>Mystore</header>
    <ul>
      <li><a class="nav-link" href="#list">List of Customer</a></li>
      <li><a class="nav-link" href="#list1">Quries</a></li>
      <li><a class="nav-link" href="#list2">Orders</a></li>
      <li><a class="nav-link" href="logout.php">LOG OUT</a></li>
      <li><a class="nav-link" href="#"></a></li>
          </nav>
          <div class="title"><?php echo $a."&nbsp;" ?></div> 
 <main id="main-doc">  
 
 <br><br><br><br>
   <section class="main-section" id="list">
     <header>List of Customer</header>
     <article>
     <table style="width:100%" >
<tr class="top">
<th>Name</th>
<th>Username</th>
<th>Mobile</th>
<th>Address</th>
</tr>
<?php 



function userfun($fn,$ln,$usr,$no,$add){
       $rslt = "<tr>
       <th>$fn $ln</th>
       <th>$usr</th> 
       <th>$no</th>
       <th>$add</th>
     </tr>";
     echo $rslt;
    }
    $sql = "SELECT * FROM usertable ORDER BY id ASC";
    $retval = mysqli_query( $con, $sql);
    
    if(mysqli_num_rows($retval)>0){
    while($row = mysqli_fetch_array($retval)) {
            userfun(
                    $row['f_name'],
                    $row['l_name'],
                    $row['username'],
                    $row['mobile'],
                    $row['address']);
    }}

    ?>
    </table>
        </article>
        </section>
        <br><br><br><br><br><br>
        <section class="main-section1" id="list1">
       
     <header>Question of Customer</header>
     <article>
     <table style="width:100%" >
<tr>
<th>username</th>
<th>Question</th>
<th>Action</th>
</tr>
<?php
function queryfun($qusr,$qqry){
       $rslt = "<tr>
       <th>$qusr</th>
       <th>$qqry</th> 
       <th><button>Reply</button></th>
     </tr>";
     echo $rslt;
    }
    $qsql = "SELECT * FROM query ORDER BY q_id ASC";
    $qretval = mysqli_query( $con, $qsql);
    
    if(mysqli_num_rows($qretval)>0){
    while($row = mysqli_fetch_array($qretval)) {
            queryfun(
                    $row['q_user'],
                    $row['q_query']
                    );
    }}

    ?>
</table></article></section>
<br><br><br><br><br><br>
        <section class="main-section2" id="list2">
       
     <header>Customer Orders</header>
     <article>
     <table style="width:100%" >
<tr>
<th>Customer name</th>
<th>Product Name</th>
<th>Time/Date</th>
<th>Action</th>
</tr></table></article></section>
    <footer>
      &copy; 2019 reserved by "Sonu and Aman"   contect:-mahajan00sonu@gmail.com
    </footer>
</main>

</body>
</html>