<?php
    include("check.php");

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
<script type="text/javascript">
function BMI() {
    var z = document.getElementById('h').value;
    var w = document.getElementById('w').value;
    var bmi = w / (z / 100 * z / 100);
    var bmio = (bmi.toFixed(2));
    document.getElementById("result").innerHTML = "Your BMI is" + bmio;

}
</script>

<body>
    <header>
        <a href="#" class="logo">Corona Stacks </a>
        <div class="menu-toggle">
            <nav>
                <ul>

                    <li><a href="home.php">Home</a></li>
                    <li><a href="checkup.php">check up</a></li>
                    <li><a href="Bmi.php" class="active">Bmi Calculter</a></li>
                    <li><a href="about.php">About us</a></li>
                    <!-- <li><a href="stacs.php">Stactics</a></li> -->
                    <li><a href="./profile.php">profile</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </div>
    </header>

    <div class="bmi1">
        <h2 class="h2">Bmi Calculator</h2>
        <p class="hight"> Height</p>
        <input type="text" id="h">
        <p class="hight"> Weight</p>
        <input type="text" id="w">
        <p id="result"></p>
        <button id="btn" onclick="BMI()">Calculate</button>
        <p id="info">Please enter height [cm] and weight [kg]</p>
    </div>
</body>

</html>