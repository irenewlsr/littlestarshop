<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Check Status</title>
    <link href="showStatusCus.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/3ff17dbd4d.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <header>
        <!-- Navigation Bar-->
        <div class="topnav" id="myTopnav">
          <a href="index.php">Home</a>
          <a href="about.html">About</a>
          <a href="showproductcus.php">Pre-Order</a>
          <a href="showStatusCus.php"  class="active">Check Status</a>
          <a href="login.php">Login as admin</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>      
        </div>
      </header>
      
     <p class="title">All Order</p>
     <table id="table_Product" cellpadding="10px" cellspacing="0" border="1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <tr style="background-color:#AFAFC7;color:white;border:white;">  
            <td>ID</td> 
            <td>Name</td>
            <td>Album ID</td>
            <td>Amount</td>
            <td>Contact</td>
            <td>Delivery</td>
            <td>Address</td>
            <td>Status</td>
        </tr>
    
    <?php 
	   include "db.inc.php";

	   $conn = mysqli_connect($servername, $username, $password);
	   mysqli_select_db($conn, $dbname);

	   if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
     
       $sql="select * from orderdetail";
       $result= $conn -> query($sql);
	
       if($result -> num_rows > 0){	
           while ($row = $result-> fetch_assoc()) { 
               echo "<tr><td>".$row["ID"] . 
               "</td><td>" .$row["name"] . "</td><td>" .$row["albumid"] . 
               "</td><td>" .$row["amount"] . 
               "</td><td>" .$row["contact"] . 
               "</td><td>" .$row["delivery"] . 
               "</td><td>" .$row["address"] . 
               "</td><td>" .$row["status"] . "</td></tr>" ;
           }
           echo "</table>";
       }
       else {
           echo "0 result";
       }
    
    ?>
    
    </table>
    </br>
    <a href="index.php"><input type="button" class="btn1" value="HOME"></a>
    <script src="script.js"></script>
  </body>
</html>