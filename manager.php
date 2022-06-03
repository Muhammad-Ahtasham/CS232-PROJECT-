<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db_project";
$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    die("connection to the local host failed due to the " . mysqli_connect_error());
}

$query = "select * from `orders`";
$result = mysqli_query($con, $query);
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
    * {
      padding: 0%;
      margin: 0%;
    }
    body{
      background: #f0b089;
    }
    .bg {
      width: 100%;
      height: 100%;
      position: absolute;
      opacity: 0.5;
      z-index: -1;
    }

    .btns {
      margin-top: 3%;
      margin-left: 2%;
      width: 90%;
      float: left;
    }

    .btns button {
      display: block;
      padding: 1%;
      margin: 1%;
      margin-left: 5%;
      width: auto;
      background: rgb(186, 66, 66);
      color: white;
      border: none;
      border-radius: 22px;
    }

    .btns button:hover {
      border: 2px solid white;
      background: white;
      color: brown;
    }

    .out {
      float: left;
      margin: 1% 3% 0% 3%;
      padding: 1% 3% 0% 3%;
      border: 3px solid black;
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
  <img class="bg" src="" alt="">
</div>
  <table>
    <tr>
        <td>SNO</td>
        <td>PIZZA QUANTITY</td>
        <td>PIZZA TOTAL</td>
        <td>PIZZA DESC</td>
        <td>BURGER QUANTITY</td>
        <td>BURGER TOTAL</td>
        <td>BURGER DESC</td>       
        <td>DESI QUANTITY</td>
        <td>DESI TOTAL</td>
        <td>DESI DESC</td>     
        <td>DESI QUANTITY</td>
        <td>DESI TOTAL</td>
        <td>DESI DESC</td>
        <td>TOTAL SALE</td>
        <td>DATE</td>
    </tr>
    <!-- `SNO`, `pizzaqty`, `pizzatot`, `pizzadesc` , `burgerqty`, `burgertot`, `burgerdesc`, `desiqty`, `desitot`, `desidesc` , `chineesqty`, `chineestot`, `chineesdesc`, `totalsale`, `DATE` -->
    <?php

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SNO'] . "</td>";
echo "<td>" . $row['pizzaqty'] . "</td>";
echo "<td>" . $row['pizzatot'] . "</td>";
echo "<td>" . $row['pizzadesc'] . "</td>";
echo "<td>" . $row['burgerqty'] . "</td>";
echo "<td>" . $row['burgertot'] . "</td>";
echo "<td>" . $row['burgerdesc'] . "</td>";
echo "<td>" . $row['desiqty'] . "</td>";
echo "<td>" . $row['desitot'] . "</td>";
echo "<td>" . $row['desidesc'] . "</td>";
echo "<td>" . $row['chineesqty'] . "</td>";
echo "<td>" . $row['chineestot'] . "</td>";
echo "<td>" . $row['chineesdesc'] . "</td>";
echo "<td>" . $row['totalsale'] . "</td>";
echo "<td>" . $row['DATE'] . "</td>";
echo "</tr>";
}
echo "</table>";
    ?>
    </table>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
  <script>
    function saleFun() {
      document.getElementById("out").innerHTML = "this is changed"
      <?php
      if(isset($_POST['sales'])) { 
        echo "This is Button1 that is selected"; 
      } 
      ?>
    }
    function clearFun() {
      document.getElementById("out").innerHTML = " "

    }

  </script>
</body>

</html>