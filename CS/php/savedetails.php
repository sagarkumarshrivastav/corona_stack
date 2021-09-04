<?php
    
    
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $emailid =$_POST['emailid'];
        $firstname =$_POST['first_name'];
        $lastname=$_POST['last_name'];
        $address =$_POST['address'];
        $phone =$_POST['phone'];
        $isvacinated =$_POST['isvacinated'];

        

        
        $sql = "INSERT into userdetails(emailid,firstname,lastname,address,phone, isVacinated) VALUES('$emailid','$firstname','$lastname','$address','$phone','$isvacinated')";

        if(mysqli_query($link, $sql))
        {
           
          
          echo '<script>
          alert("Successfully  saved");         
          
          
          </script>';
        } 
        else
        {
            echo '<script>
            alert("Not saved");
           </script>';
          
        }
       


    }
   