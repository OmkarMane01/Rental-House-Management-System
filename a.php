<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ragistration</title>
<style>
body{
  margin:0;
  padding:0;
  background:black;
  font-family:sans-sarif;
  }
  .box{
  position:absolute;
  top:60%;
  left:35%;
  transform: translate(-20%,-20%);
  width:550px;
  height:850px;
  background:#001e2d;
  box-sizing:border-box;
  overflow:hidden;
  box-shadow:15px 15px 15px #fff ;
  border:2px solid rgba(0,0,0,.5);
  }
  .box:before
  {
  content:'';
  position:absolute;
  top:0;
  left:-100;
  width:100%;
  height:100%;
  background:rgba(255,255,255,.1);
  transition:0.5s;
  pointer-events:none;
  }
  .box:hover:before{
  left:-50%;
  transform:skewX(-7deg);
  }
  
 .box span
  {
  position:absolute;
  top:0;
  left0;
  width:100%;
  height:100%;
  display:block;
  box-sizing:border-box;
  }
 
 
  .box span:before
  {
  content:'';
  position:absolute;
  width:100%;
  height:2px;
  background:#0093ff;
  animation:animate 4s linear infinite;
  }
  @keyframes animate
 {
    0%{
  transform: scaleX(0);
  transform-origin:left;
  }

    50%{
  transform: scaleX(1);
  transform-origin:left;
  }

    50.1%{
  transform: scaleX(1);
  transform-origin:right;
  }
    100%{
  transform: scaleX(0);
  transform-origin:right;
  }
} 
   
   .box span:nth-child(1)
  {
   transform:rotate(0deg);
   
  }
  .box span:nth-child(2)
  {
   transform:rotate(90deg);
   
  }
  .box span:nth-child(3)
  {
   transform:rotate(180deg);
   
  }
  .box span:nth-child(4)
  {
   transform:rotate(270deg);
   
  }
  .box span:nth-child(2):before
  {
   animation-delay:-2s;
  }
  .box span:nth-child(4):before
  {
   animation-delay:-2s;
  }
  
  
 .box .content
  {
  position:absolute;
  top:15px;
  left:15px;
  right:15px;
  bottom:15px;
  border:3px solid #ffeb3b;
  padding:20px;
  
  box-shadow: 0 5px 10px rgba(0,0,0,.5);
  
  }
  .box .content h1
  { 
  text-align:center;
    color:#fff;

  margin:0,0,10px;
  padding:0;
  } 
  .box .content h4
  {
  color:#fff;
   text-align:left;
  font-size:20px;
  margin:0,0,10px;
  padding:0;
  }
  .box .content p
  {
  color:#fff;
  }

 .button{
 width:30%;
 height:30px;
 font-size:18px;

 }
 
  .button:hover{
  background:#FF0066;
   color:#FFFFFF;
  }
   
  .style1 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-weight: bold;
  font-style: italic;
  background-color:#FFFF00;
  color:#000000;
  text-shadow: 5px 5px 11px #CC0000;
}

.boxx
    {
      position: absolute;
      
      transform: translate(-50%,-50%);
      width: 172px;
      height: 70px;
      text-align: center;
      line-height: 60px;
      color: #fff;
      font-size: 24px;
      text-transform:uppercase;
      text-decoration: none;
      font-family: sans-serif;
      box-sizing: border-box;
      background: linear-gradient(175deg,#999999,#CCCCCC,#000033,#000066);
      background-size: 400%;
      border-radius: 60px;

       }
       
       
        .boxx:hover
        {
          
          background: linear-gradient(110deg,#999999,#990033,#990066,#990066);
      background-size: 400%;
      border-radius: 40px;
      color: #000000;
	  
	  width: 172px;
      height: 70px;
           }
          


   

  </style>

</head>
<body>
    
  

   <h1 class="style1" align="center"><img   style="padding-left:30px; padding-top:25px;" src="house/logoo.png" />RENTAL HOUSE MANAGEMENT SYSTEM   </h1>

  
  
     <center>
  <div style="box-shadow: 0 5px 10px white;">
          
      <a href="index.php"><h1  class="boxx"  style="top:20%;
      left:7%;">HOME</h1></a>
      
      <a href="aboutus.php"><h1  class="boxx"  style="top:20%;
      left:19%;">About us</h1></a>
    
         <a href="help.php"><h1  class="boxx"  style="top:20%;
      left:31%;">Help</h1></a>
    
    <a href="contact.php"><h1  class="boxx"  style="top:20%;
      left:43%;">Contact</h1></a>
    
   <a href="rent.php"> <h1 class="boxx" style="top: 20%;
      left: 55%;" >Rent</h1>
    </a>
      
      <a href="admin.php"><h1  class="boxx"  style="top:20%;
      left:67%;">Setting</h1></a>
	  
	    <a href="adlogin.php"><h1  class="boxx"  style="top:20%;
      left:79%;">Login</h1></a>
	  
	  <a href="logout.php"><h1  class="boxx"  style="top:20%;
      left:92%;">logout</h1></a>
      
    
    </div>
</center>
<br/>
<br/>
<br/>


  <div class="box">
     <span></span>
     <span></span>
     <span></span>
     <span></span>
     
  
<div class="content">
    <h1 style="text-shadow:5px 5px 9px yellow;">SIGNUP</h1> 
<center>     <p>
    <form action="b.php" method="POST"  enctype="multipart/form-data"  >
      

      <h4> First name:<br/>     
         <center><input type="text" size="40" maxlength="40" name="fname" value="" /></center>
        Middle name:  <br/>
        <center><input type="text" size="40" maxlength="40" name="mname" value="" /></center>
        
         Last name:<br/>
        <center> <input type="text" size="40" maxlength="40" name="lname" value="" /></center>
      
        Age:<br/><center><input type="text" size="40" maxlength="30" name="age" value="" /></center>
       
        Email :<br/><center><input type="text" size="40" maxlength="50" name="email" value="" /></center>
       
        Mobile No :<br/><center><input  type="text" size="40" maxlength="10" name="mobile" value="" /></center>
       
          Gender:<br/><center><input name="subject" type="radio" value="Male"> Male
             <input type="radio" name="subject" value="Female"> Female</center>
        
     Address:<br/><center><input type="text" size="40" maxlength="200" name="address"  value="" /></center>
      
       Occupation:<br/><center> <input type="text" size="40" maxlength="40" name="occupation" value=""  /></center>
       
    Password :<br/><center><input type="password"  name="pass" size="40" maxlength="40" /></center>
       
     Confirm Password :<br/><center> <input type="password"  name="pass1" size="40" maxlength="40" /></center>
      </h4> 
      
      <h4>
      
      <input type="file" name="uploadfile" value=""/>
      
    
      </h4>
      
    
    <br />
        <center><input class="button" type="submit" value="Submit"
      name="submit" /></center>
    
   
   </form>
   </p> </center>
   </div>
</div>

</body>
</html>
