<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db_project";
$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    die("connection to the local host failed due to the " . mysqli_connect_error());
}

$burgerquantity = 0;
$desiquantity = 0;
$chineesquantity =0;
$pizzaquantity = 0;
    
    
$pizzaquantity = $_POST['pizzaquantity'];
$pizzadesc = $_POST['pizzadesc'];
$burgerquantity = $_POST['burgerquantity'];
$burgerdesc = $_POST['burgerdesc'];
$desiquantity = $_POST['desiquantity'];
$desidesc = $_POST['desidesc'];
$chineesquantity = $_POST['chineesquantity'];
$chineesdesc = $_POST['chineesdesc'];
$pizzatot = $pizzaquantity*1200;
$burgertot = $burgerquantity*250;
$desitot = $desiquantity*500;
$chineestot = $chineesquantity*300;
$totalsale = $pizzatot+$burgertot+$desitot+$chineestot;

$sql = "INSERT INTO `orders` (`SNO`, `pizzaqty`, `pizzatot`, `pizzadesc` , `burgerqty`, `burgertot`, `burgerdesc`, `desiqty`, `desitot`, `desidesc` , `chineesqty`, `chineestot`, `chineesdesc`, `totalsale`, `DATE`) VALUES ('', '$pizzaquantity', '$pizzatot', '$pizzadesc', '$burgerquantity', '$burgertot', '$burgerdesc', '$desiquantity', '$desitot', '$desidesc', '$chineesquantity', '$chineestot', '$chineesdesc', '$totalsale',current_timestamp());";
if ($con->query($sql)) {
    
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
    <title>orders</title>
    <style>
        *{
            padding: 0%;
            background: #000;
            color: white;
        }
        .container{
            margin: 3%;
            padding:2%;
            border: 2px double white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>THANKS FOR BUYING FROM GIKI ONLINE FOOD CORNER</h1>
        <P>YOUR ORDER WILL BE DELIVERED SOON</P>
    </div>

</body>
</html>