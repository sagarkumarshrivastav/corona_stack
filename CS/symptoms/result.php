<?php


include("../php/connect.php");
session_start();

if(isset($_POST['submit']))
{
 
    $coronasymptoms =array("fever","loss of taste or smell","breathing problem","chest pain" );
   
    // print_r($_POST);
    $emailid =$_SESSION['emailid'];
    $symptoms=$_POST['symptoms'];    
    // print_r($symptoms);
    // print_r($coronasymptoms);
    for( $i=0;$i<count($coronasymptoms);$i++)
    {
       for($j=0;$j<count($symptoms);$j++)
       {
           if($coronasymptoms[$i]==$symptoms[$j])
           {
               break;
           }
           
           echo $symptoms[$j];
       }
       if($j==count($symptoms))
       {
           break;
       }
    }   
    if($i==count($coronasymptoms))
    {
        header("location: ./corona.php");

    }
    else
    {
        header("location: ./flu.php");
    }
   
   
    
    // $sql = "select * from user where emailid='$emailid' and password='$password'";
    // if($users=mysqli_query($link, $sql))
    // {


    //     if($user=mysqli_num_rows($users)!=1)
    //     {   
    //         header("location: ../login/index.php?login=fail");
    //         $_SESSION['isLogin']="false";

    //     }
    //     else
    //     {
    //             $_SESSION['isLogin']="true";
    //             $_SESSION['emailid']="$emailid";
    //             header("location: ../home.php");
    //     }
        
           
    // }
    // else{
    //     echo "Error".mysqli_error($link);
    // }


}


?>