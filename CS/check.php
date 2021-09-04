<?php
  session_start();
   
    if(!isset($_SESSION['isLogin']))
        header('location: ./Login/index.php');
    else if($_SESSION['isLogin']!="true")
       header('location: ./Login/index.php');
       
    
      


?>