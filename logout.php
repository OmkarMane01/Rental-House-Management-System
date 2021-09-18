<?php
 session_start();
 session_unset();
  echo "<script type='text/javascript'>alert('YOU ARE LOGOUT')
               </script>";

               echo "<script language='javascript' type='text/javascript'>location.href='adlogin.php'
               </script>";
?>