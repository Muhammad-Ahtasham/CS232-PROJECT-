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

$sql = "INSERT INTO `login` (`SNO`, `NAME`, `AGE`, `GENDER`, `EMAIL`, `PHONE`, `DATE`) VALUES ('', '$name', '$age', '$gender', '$email', '$phone', current_timestamp());";


  



if ($con->query($sql)) {
    
}
else{
    echo "$con->error";
}
$con->close();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>GIKI ONLINE FOOD CORNER</title>
    <style>
      *{
        padding: 0%;
        margin: 0%;
      }
      .bg{
        width: 100%;
        height: 100%;
        position: absolute;
        opacity: 0.5;
      }
      .container{
        width: 80%;
        height: auto;
        margin-top: 7%;
        border: 2px solid black;
        padding: 3% 0% 2% 2%;
        text-align: center;
        background-image: url("1.jpg");
        opacity: 0.9;
      }
      .container h3{
        color: white;
        margin-bottom: 5%;
      }
      .container form{
        margin: 0%;
        padding: 0%;
      }
      .container label{
        font-size: larger;
        color: white;
        font-weight: bolder;
        margin: 10px;
      }
      .container input{
        padding: 5px;
        margin: 5px;
        border: 3px solid black;
        border-radius: 20px ;
      }
      .container button{
        margin: 2% 0% 0% 0%;
        padding: 1%;
        border: 3px solid black;
        border-radius: 20px ;
      }
      .container input:hover{
        border: 3px solid red;
        padding: 7px;
      }
      .container button:hover{
        border: 1px solid white;
        padding: 7px;
        background: red;
        color: white;
        padding: 1%;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <li class="lio" style="display: flex; font-size: larger; margin-right: 1%;">GIKI FOOD</li>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">CONTACT</a>
              </li>
            </ul>
    
          </div>
        </div>
      </nav>
      <img class="bg" src="2.jpg" alt="">
<div class="container">
    <H3>ORDER YOUR FAVOURITE FOOD NOW</H3>
    <form action="options.php" method = "post">
        <label for="pizza">PIZZA</label>
        <input type="number" id="pizzaquantity" name="pizzaquantity" placeholder="QUANTITY ...1200RS/">
        <input type="text" name="pizzadesc" placeholder="ENTER DESCRIPTIONS">
        <br>
        <label for="burger">BURGER</label>
        <input type="number" id="burgerquantity" name="burgerquantity" placeholder="QUANTITY ...250RS/">
        <input type="text" name="burgerdesc" placeholder="ENTER DESCRIPTIONS">
        <br>
        <label for="pizza">DESI</label>
        <input type="number" id="desiquantity" name="desiquantity" placeholder="QUANTITY...300RS/">
        <input type="text" name="desidesc" placeholder="ENTER DESCRIPTIONS">
        <br>
        <label for="pizza">CHINEES</label>
        <input type="number" id="chineesquantity" name="chineesquantity" placeholder="QUANTITY...500RS/">
        <input type="text" name="chineesdesc" placeholder="ENTER DESCRIPTIONS">
        <br>
        <button>ORDERNOW</button>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    </script>
    <script>
        
    </script>
</body>

</html>