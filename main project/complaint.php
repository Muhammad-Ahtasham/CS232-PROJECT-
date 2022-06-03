<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db_project";
$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    die("connection to the local host failed due to the " . mysqli_connect_error());
}
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sqli = "INSERT INTO `complaint` (`SNO`, `NAME`, `AGE`, `GENDER`, `EMAIL`, `PHONE`, `OTHER_DESC`, `DATE`) VALUES ('', '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";


  



if ($con->query($sqli)) {
    
}
else{
    echo "$con->error";
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feed back or complaints</title>
    <STYle>
        *{
            padding: 0%;
            margin: 0%;
            
        }
        .bg{
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: -1;
            opacity:0.5;
        }
        .container{

        }
        .container h1{
            margin-top: 10%;
            text-align: center;
            position: absolute;
            margin-left: 25%;
            border: 2px solid brown;
            width:50%;

        }
        .container h1:hover{
            color: brown;
            background: white;
            padding: 3px;
        }
    </STYle>
</head>
<body>
    <img class="bg" src="2.jpg" alt="">
    <div class="container">
    <h1>
        THANKS FOR YOUR FEED BACK
    </h1>
    <br><br><br>
    <H1>
    WE HOPE YOU WILL ORDER WITH US AGAIN
    </H1>
    <br><br><br><br><br>
    <H1>
        ENJOY YOUR MEAL! HAVE A GOOD DAY!
    </H1>
    </div>
</body>
</html>