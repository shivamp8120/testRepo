<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
    table{
        margin-top:30px;
    }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
  
   
    <center><h1>Homepage</h1> <a href="logout.php">Logout</a></center>
    <ol>
    <li>Make table as per below given details:-</li>
    <table style="width:100%">
  <tr>
    <th>S.NO</th>
    <th>Size</th> 
    <th>Prize</th>
    <th>EMI</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>32 Sq ft</td>
    <td>2500</td>
    <td>12 month</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>56 Sq ft</td>
    <td>4500</td>
    <td>36 month</td>
  </tr>
 
</table>

    </ol>
</body>
</html>