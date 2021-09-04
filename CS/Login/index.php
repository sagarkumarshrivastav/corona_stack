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
<div class="hero">
    <div class="form-box">
        <div class="button-box">
        <?php
            
            if(isset($_GET['login']))
            {
                $result=$_GET['login'];
                 if($result=='fail')
                 {
                    echo " <center><font color='red'> Wrong Credintal</font></center>";
                 }
            }
                
        ?>
        <?php
            
            if(isset($_GET['exist']))
            {
                $result=$_GET['exist'];
                 if($result=='true')
                 {
                    echo " <center><font color='red'> Already have acount</font></center>";
                 }
                 else{
                    echo " <center><font color='green'> Registerd Successfully</font></center>";
                 }
            }
                
        ?>
            <div id="btn">
                <button type="button" class="toggle-btn" onclick= "login()">Log In</button>
                <button type="button" class="toggle-btn" onclick= "register()">Register</button>
            </div>
            <form id="login" class="input-group" action="../php/verify.php" method="post">
                <input type="text" class="input-field" placeholder="User Id"  name="emailid" required> 
                
                <input type="text" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name='submit'>Log in</button>

            </form>
            <form id="register" class="input-group" action="../php/addUser.php" method="post"  
            onsubmit=" validateForm()">
                <input type="email" class="input-field" placeholder="Email" name="emailid" required>
                <input type="password" id ="password-input"  class="input-field" placeholder="Password"  name="password" required>
                <input type="password" id ="cpassword-input" class="input-field" placeholder="Confirm Password" name="cpassword" required> <div id="password-msg"></div>
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions

                </span>
                <button type="submit" name="submit" class="submit-btn">Register</button>

            </form>
        </div>
    </div>
</div> 

<script src="code.js"></script>
</body>
</html>
