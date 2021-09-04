<?php
    session_start();

    include("connect.php");


    if(isset($_POST['submit']))
    {
        
        $emailid =$_POST['emailid'];
        $password = $_POST['password'];

        
        
        $sql = "select * from user where emailid='$emailid' and password='$password'";
        if($users=mysqli_query($link, $sql))
        {


            if($user=mysqli_num_rows($users)!=1)
            {   
                header("location: ../login/index.php?login=fail");
                $_SESSION['isLogin']="false";

            }
            else
            {
                    $_SESSION['isLogin']="true";
                    $_SESSION['emailid']="$emailid";
                    header("location: ../home.php");
            }
            
               
        }
        else{
            echo "Error".mysqli_error($link);
        }


    }
?>


