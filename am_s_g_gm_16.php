<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
tr:hover{
background-color:#e57373;
}
th{
background-color: #37474F;
color: #F8F8FF;
} 
tbody{
color: #800000;
font-size: 20px !important;
}   
</style>
</head>
<body>
<?php
$id=$_SESSION['id'];
$sql="SELECT * FROM login where id=$id";
$result_set=mysqli_query($con,$sql);
if($result_set==true)
{
include('profile_header.php');
?>
<div class="container">
<h2>Select Group </h2>
<table class="table tabble-striped table-bordered table-hover">
<tbody>
<tr>
    <th>Group Number</th>
    <th>Assienments</th> 
  </tr>
  <tr>
  <td>G1</td>
    <td><a href="am_g_m_g1_16.php">view</a></td>
   </tr>
  <tr>
  <td>G2</td>
    <td><a href="am_g_m_g2_16.php">view</a></td>
  </tr>
  <tr>
  <td>G3</td>
    <td><a href="am_g_m_g3_16.php">view</a></td>
    </tr>
  </tr>
  <tr>
  <td>G4</td>
    <td><a href="am_g_m_g4_16.php">view</a></td>
    </tr>
    <tr>
  <td>G5</td>
    <td><a href="am_g_m_g5_16.php">view</a></td>
    </tr>
    <tr>
  <td>G6</td>
    <td><a href="am_g_m_g6_16.php">view</a></td>
    </tr>
    <tr>
  <td>G7</td>
    <td><a href="am_g_m_g7_16.php">view</a></td>
    </tr>
    <tr>
  <td>G8</td>
    <td><a href="am_g_m_g8_16.php">view</a></td>
    </tr>
    <tr>
  <td>G9</td>
    <td><a href="am_g_m_g9_16.php">view</a></td>
    </tr>
    
    </tbody>
</table>
</div>
<?php include('footer.php'); 
}
else
{
	header('location:login.php');
}
?>
</body>
</html>
