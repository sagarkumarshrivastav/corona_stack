<?php
include("check.php");
include("./php/connect.php");

    
$emailid= $_SESSION['emailid'];
    
    $sql = "select * from userdetails where emailid='$emailid'";
    if($userdetails=mysqli_query($link, $sql))
    {
        $details=mysqli_fetch_array($userdetails);
        
        $firstname=$details[1];
        $lastname=$details[2];
        $address=$details[3];
        $phone=$details[4];
        $isvacinated=$details[5];
        
        
        
           
    }
    else{
        echo "Error".mysqli_error($link);
    }











?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Stacks</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="#" class="logo">Corona Stacks </a>
        <div class="menu-toggle">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="checkup.php">check up</a></li>
                    <li><a href="Bmi.php">Bmi Calculter</a></li>
                    <li><a href="about.php">About us</a></li>
                    <!-- <li><a href="stacs.php">Stactics</a></li> -->
                    <li><a href="./profile.php" class="active">profile</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </div>
    </header>
    <div class="regform">
        <h1>Patient Details</h1>
    </div>
    <div class="main">
        <form action="./php/savedetails.php" method="POST">
            <div id="name">
                <h2 class="name"> Name</h2>
                <input class="firstname" type="text" name="first_name" value="<?php echo $firstname ?>"><br>
                <label class="firstlabel"> first name</label>
                <input class="lastname" type="text" name="last_name" value="<?php echo $lastname ?>">
                <label class="lastlabel"> last name</label>
            </div>
            <h2 class="name"> Address </h2>
            <input class="company" type="text" name="address" value="<?php echo $address ?>">

            <h2 class="name">Email</h2>
            <input class="email" type="text" name="emailid" value="<?php echo $emailid ?>">

            <h2 class="name"> Phone </h2>
            <input class="code" type="text" name="area_code">
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone" value="<?php echo $phone ?>">
            <label class="phone-number">Phone Number</label>

            <h2 id="coustomer"> Are you vacinated?</h2>
            <label class="radio">
                <input class="radio-one" type="radio" name="isvacinated" value="Yes">
                <span class="checkmark"></span>
                Yes
            </label>


            <label class="radio">
                <input class="radio-two" type="radio" name="isvacinated" value="No">
                <span class="checkmark"></span>
                No
            </label>


            <button type="submit" name="submit">save</button>
            <button><a href="./php/logout.php">Logout</a></button>

        </form>
    </div>
</body>

</html>