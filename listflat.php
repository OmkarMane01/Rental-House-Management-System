<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rental house managment system</title>
<style>
body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
ul{
margin:0px;
padding:0px;
}
ul li{
background: linear-gradient(175deg,#999999,#CCCCCC,#000033,#000066);
background-size: 350%;
border-radius: 60px;
width:222px;
height:70px;
box-sizing: border-box;
line-height:55px;
float:left;
text-align:center;
list-style:none;}

ul li a{
color:#FFFFFF;
text-decoration:none;
    font-size: 24px;
      text-transform:uppercase;
     font-family: sans-serif;
     display:block;
}
ul li a:hover
{
         background: linear-gradient(110deg,#999999,#990033,#990066,#990066);
      background-size: 300%;
      border-radius: 60px;
      color: #000000;
    width:222px;
height:70px;
    
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;}
 .style1 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-weight: bold;
  font-style: italic;
  background-color:#FFFF00;
  color:#000000;
  text-shadow: 5px 5px 11px #CC0000;
}

.listflat{
  
  width:460px;
  height:670px;
  background:#001e2d;
  box-sizing:border-box;
  overflow:hidden;
  box-shadow:10px 10px 15px #fff ;
  border:2px solid rgba(0,0,0,.5);
  padding:30px;
  float:left
 
  }
  .listflat2
  {
  padding-top:30px;
  padding-left:100px;
  padding-right:100px;
  float:left;}
</style>
</head>


<body>
  <div class="style1" align="center">

   <h1><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>
</div> 


<ul>
   <li> <a href="index.php">home</a></li>
   <li> <a href="" >house</a>
      <ul>
        <li> <a href="addhouse.php" >addhouse</a></li>
          <li> <a href="listhouse.php" >houselist</a></li> 
      </ul>
  </li>  
   <li> <a href="" >flat</a>
       <ul>
        <li> <a href="addflat.php" >addflat</a></li>
          <li> <a href="listflat.php" >flatlist</a></li> 
       </ul>
   </li>
   <li> <a href="" >shop</a>
       <ul>
        <li> <a href="addshop.php" >addshop</a></li>
          <li> <a href="listshop.php" >shoplist</a></li> 
      </ul>
   </li>
   <li> <a href="" >godown</a>
      <ul>
        <li> <a href="addgodown.php" >addgodown</a></li>
          <li> <a href="listgodown.php" >godownlist</a></li> 
      </ul> 
   </li>
   <li> <a href="logout.php" >logout</a></li>
</ul>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<marquee behavior="alternate" scrollamount="8" width="700">
       <font style="color:#FFFFFF; font-size:36px;  "><i>List of Flat</i></font> 
               </marquee>
</center>

<?php
  session_start();
include_once 'connt.php';

  

 
$useremail=$_SESSION['emailid'];
if($useremail==true)
{
#echo '<font color="#FFFFFF">'."Welcome".$useremail.'</font>';
}
else
 {
 echo "<script type='text/javascript'>alert('YOU ARE FIRST LOGIN PLEASE!!!!!!')
               </script>";  
 echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";
			  
}




$query="SELECT * FROM  `flatlist`  WHERE email =  '$useremail'";
         
  $data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total != 0)
{   while($result=mysqli_fetch_assoc($data))
   {
       
       echo '<div class="listflat2"><div class="listflat">
	   <center><img src="'.$result['folder2'].'" width="350px" height="250px" /></center>
	   <font style="color:#FFFF99; font-size:23px;"><br/>
	   
	   <font style="color:#FF9999">Name:</font>'.$result['name'].
	   '<font style="padding-left:10px;">'.$result['middlenm'].'</font>
        <font style="padding-left:10px;">'.$result['lastnm'].'</font><br/>
	   
	     <font style="color:#FF9999">City:</font>'.$result['city'] .'<br/>
		  <font style="color:#FF9999">Address:</font>' .$result['address'].'<br/>
		  
		  <font style="color:#FF9999">Email Id:</font>' .$result['email'] .'<br/>
		  <font style="color:#FF9999">Mobile No:</font>'.$result['mobileno'] .'<br/>
		  
		   <font style="color:#FF9999">Format of Flat:</font>' .$result['formatofflat'] .'<br/>
		   
		    <font style="color:#FF9999">Flat ID:</font>' .$result['hid'] .'<br/>
			 <font style="color:#FF9999">Floor No:</font>' .$result['floorno'] .'<br/>
		  
		  <font style="color:#FF9999">Desciption of Flat:</font>'.$result['desc'].'<br/>
		  
		  
		    <font style="color:#FF9999">Rent:</font>' .$result['rent'] .'<br/>'
		  
		  .'</font>'.
	  '</div></div>';
     
   }
}
else
{

  echo "<script type='text/javascript'>alert('Table has not records!')
               </script>";
 echo "<script language='javascript' type='text/javascript'>location.href='owner.php'
               </script>";
 
}
?>
</body>
</html>
