<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Manage Product</title>
    <link href="showProduct.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/3ff17dbd4d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <!-- Navigation Bar-->
      <div class="topnav" id="myTopnav">
        <a href="amhome.html">Home</a>
        <a href="cdProduct.html"  class="active">Manage Product</a>
        <a href="update.html" >Update Customer Status</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>
      </div>
    </header>
      
     <p class="title">All Product</p>
     <table id="table_Product" cellpadding="10px" cellspacing="0" border="1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <tr style="background-color:#AFAFC7;color:white;">  
            <td>Album ID</td>  
            <td>Name</td>  
            <td>Price</td>  
            <td>End Date</td>  
        </tr>  
        
    <?php 
	   include "db.inc.php";

	   $conn = mysqli_connect($servername, $username, $password);
	   mysqli_select_db($conn, $dbname);

	   if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
     
       $sql="select * from product";
       $result= $conn -> query($sql);
	
       if($result -> num_rows > 0){	
           while ($row = $result-> fetch_assoc()) {
               echo "<tr><td>".$row["AlbumID"] . 
               "</td><td>" .$row["Name"] . "</td><td>" .$row["Price"] . 
               "</td><td>" .$row["EndDate"] . "</td></tr>" ;
           }
           echo "</table>";
       }
       else {
           echo "0 result";
       }
    
    ?>
    
    </table>
    </br>
    <a href="cdProduct.html"><input type="button" class="btn1" value="BACK"></a>
  </body>
</html>