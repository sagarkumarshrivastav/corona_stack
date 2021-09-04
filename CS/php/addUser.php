<?php

    include("connect.php");
    if(isset($_POST['submit']))
    {
        $emailid =$_POST['emailid'];
        $password = $_POST['password'];
        
        echo"hello";
        
        $sql = "select * from user where emailid='$emailid'";
        if($users=mysqli_query($link, $sql))
        {


            if($user=mysqli_num_rows($users)==0)
            {   
                
                $sql = "INSERT into user VALUES('$emailid', '$password')";
                if($users=mysqli_query($link, $sql))
                {
                     header("location: ../login/index.php?exist=fail");
                }
                


            }
            else{

                header("location: ../login/index.php?exist=true");
            }
            
               
        }
        else{
            echo "Error".mysqli_error($link);
        }


    }

?>