<?php 

$link = mysqli_connect("localhost", "root", "", "phpsamples");

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashborad</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="demo-content">
    <div>
        Welcome <?php echo$_SESSION ["name"];?>! Click to <a href="logout.php">Logout</a>
        <div> 
          <img src='INVENTORY.jpeg' height='50%' width='50%'>

        </div>
        <div>
         <a href="productlist.php  ?>"><button type="submit" name="submit"
                class="btn products">products</button></a>
        </div>
        <div>
          <a href="invoice1.php  ?>"><button type="submit" name="submit"
                class="btn products">reports</button></a>
          </div>
    </div>


</div>
