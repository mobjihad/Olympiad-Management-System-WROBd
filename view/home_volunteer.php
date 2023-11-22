<?php 
include("../controller/session.php");


if($_SESSION["Category"]!="Volunteer"){
  header("Location:$Home");
  exit();

}


if(!isset($_SESSION["Username"])) { 

  header('Location:login.php');
  exit();
}

 if(isset($_GET['logout'])){
   
  unset($_SESSION["Username"]);
  unset($_SESSION["Category"]);
  header('Location:login.php');
  exit();
     
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer</title>
</head>
<body>
     <H1> <?php echo $_SESSION["Category"]?> Dashboard <H1> <br>
     <H2> Hello <?php echo $_SESSION["Username"] ?> <H2>

  <table>
<tr>
 
  <td><a href="show_PD.php"><input type="button" value="Manage Participants"></a></td>
  


</tr>
<tr>
  
 
 


</tr>
<tr>
  
  <td><a href="Create_report.php"><input type="button" value="Create Report"></a></td>
  


</tr>

<tr>
  
  
  <td><a href="show_RD.php"><input type="button" value="Manage Reports"></a></td>


</tr>

<tr> 
 <td> 
  <a href= "?logout" > Log out </a>  </td>
</tr>
</table>
</body>
</html>
