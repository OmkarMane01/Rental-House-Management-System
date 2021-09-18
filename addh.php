<?php
include_once 'connt.php';

if(isset($_POST['submit']))
{
       
           $name=($_POST['name'] ); 
		 $middlenm=($_POST['middlenm'] ); 
		 $lastnm=($_POST['lastnm'] ); 

         $city=($_POST['city'] ); 
         
         $area=($_POST['area'] );

         $add=($_POST['address'] ); 
         
         $formatofhouse= ($_POST['subject'] ); 

    
         
         $email=( $_POST['email'] );
         
         $mobno=($_POST['mobile'] ); 
         
          $desc=($_POST['descrip'] ); 
         
        
           $filesname=($_FILES["uploadfile"]["name"]);
           $tempname=($_FILES["uploadfile"]["tmp_name"]);
           $folder="houseimage/". $filesname;
          
          
           move_uploaded_file($tempname, $folder);
		   
		   $filesname2=($_FILES["uploadfile"]["name"]);
           $tempname2=($_FILES["uploadfile"]["tmp_name"]);
           $folder2="houseimage/". $filesname2;
          
          
           move_uploaded_file($tempname2, $folder2);
		   
		    $rent=($_POST['rent'] ); 

           //Error handlers
           // check for empty fileds

     if(!empty($name) && !empty($middlenm) && !empty($lastnm) && !empty($city) && !empty($area) && !empty($add) && !empty($formatofhouse)  && 
      !empty($email) && !empty($mobno) && !empty($desc)  && !empty($folder) && !empty($folder2) && !empty($rent))
     {
             if(strlen($name)<4)
          {   //basic firstname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Firstname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-zA-Z]+$/",$name))
          {   //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Firstname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }



          if(strlen($middlenm)<4)
          {    //basic middlename validation
            $error=true;
            echo "<script type='text/javascript'>alert('Middlename must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-zA-Z]+$/",$middlenm))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Middlename must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }


           if(strlen($lastnm)<4)
          {    //basic lastname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Lastname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-zA-Z]+$/",$lastnm))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Lastname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }

           
             //city validation

            
           if(strlen($city)<4)
          {    //basic lastname validation
            $error=true;
            echo "<script type='text/javascript'>alert('city must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-zA-Z]+$/",$city))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('city must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }


              //area of city validation
              
           if(strlen($area)<4)
          {    
            $error=true;
            echo "<script type='text/javascript'>alert('area must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-zA-Z]+$/",$area))
          {    
             $error=true;
            echo "<script type='text/javascript'>alert('area must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
                //address  validation 
               if(strlen($add)<20)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Address must have atlaest 20 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
                


         
     

              //mobile  validation     
           if(!preg_match("/^[0-9]+$/",$mobno))
          {  
            echo "<script type='text/javascript'>alert('Mobile Number  must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
    
           
              
         


    //description  validation 
               if(strlen($desc)<15)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Description must have atlaest 15 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
		  
		  
		  
              //rent validation     
           if(!preg_match("/^[0-9]+$/",$rent))
          {  $error=true;
            echo "<script type='text/javascript'>alert('Rent  must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
          }
          
		  
		  
		   if(!filter_var($email,FILTER_VALIDATE_EMAIL))
          {     //Check  validation of email
             $error=true;
            echo "<script type='text/javascript'>alert('please enter valid email address!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }


                if(!$error)
         {

        
              $query="INSERT INTO  `sm`.`houselist` (
`name` ,
`middlenm` ,
`lastnm` ,
`city` ,
`area` ,
`address` ,
`formatofhouse` ,
`email` ,
`mobile` ,
`descrip` ,
`folder` ,
`folder2` ,
`rent` 
)
VALUES (
'$name',  '$middlenm',    '$lastnm',    '$city',  '$area',  '$add ',  '$formatfhouse',   
'$email',  '$mobno',  '$desc',  '$folder','$folder2','$rent')";





                      if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('YOUR ADD HOUSE WAS DONE SUCCESFULLY!')
                         </script>";

                         
                echo "<script language='javascript' type='text/javascript'>location.href='owner.php'
               </script>";


                        }
                     else
                        echo "query not executed";
      
            


             

                }




           }
     else 
          { echo "<script type='text/javascript'>alert('fields are not empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addhouse.php'
               </script>";
             }
        

}
else
        echo "not insert";


?>
