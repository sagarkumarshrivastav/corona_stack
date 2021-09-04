<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Stacks</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./symptoms/style.css">
</head>

<body>
    <header>
        <a href="#" class="logo">Corona Stacks </a>
        <div class="menu-toggle">
            <nav>
                <ul>

                    <li><a href="home.php">Home</a></li>
                    <li><a href="checkup.php" class="active">check up</a></li>
                    <li><a href="Bmi.php">Bmi Calcultor</a></li>
                    <li><a href="about.php">About us</a></li>
                    <!-- <li><a href="stacs.php">Stactics</a></li> -->
                    <li><a href="./profile.php">profile</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </div>
    </header>
    <div class="mainbox">
        <div class="box">
            <form action="./symptoms/result.php" method="post">
                <h1>Select your symptoms </h1>
                <hr>
                <div class="symptoms">

                    <input type="checkbox" name="symptoms[]" value="fever"><label for=""> fever</label><br>
                    <input type="checkbox" name="symptoms[]" value="Dry cough"><label for=""> Dry cough</label><br>
                    <input type="checkbox" name="symptoms[]" value="tiredness"><label for="">tiredness</label><br>
                    <input type="checkbox" name="symptoms[]" value="aches and pains"><label for="">aches and
                        pains</label><br>
                    <input type="checkbox" name="symptoms[]" value="sore throat"><label for="">sore throat</label><br>
                    <input type="checkbox" name="symptoms[]" value="diarrhoea"><label for="">diarrhoea</label><br>
                    <input type="checkbox" name="symptoms[]" value="loss of taste or smell"><label for="">loss of taste
                        or smell</label><br>
                    <input type="checkbox" name="symptoms[]" value="rash on skin"><label for="">a rash on skin
                    </label><br>
                    <input type="checkbox" name="symptoms[]" value="breathing problem"><label for="">breathing problem
                    </label><br>
                    <input type="checkbox" name="symptoms[]" value="chest pain"><label for="">chest pain </label><br>

                    <button type="submit" name="submit">submit</button>
            </form>
        </div>

    </div>
    </div>


</body>

</html>