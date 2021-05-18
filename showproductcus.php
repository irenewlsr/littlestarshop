<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Pre-Order</title>
    <link href="showProductcus.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/3ff17dbd4d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
        <!-- Navigation Bar-->
        <div class="topnav" id="myTopnav">
          <a href="index.php">Home</a>
          <a href="about.html">About</a>
          <a href="showproductcus.php" class="active">Pre-Order</a>
          <a href="showStatusCus.php">Check Status</a>
          <a href="login.php">Login as admin</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>      
        </div>
     </header>
     <div class="container">
      <section class="parent">
        <section class="child">
          <p class="title">All Product<p>
             <table id="table_Product" cellpadding="10px" cellspacing="0" border="1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
              <tr  style="background-color:#AFAFC7;color:white;border:white;">
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
            <a href="orderform.html"><input type="button" class="btn1" value="ORDER NOW"></a>
            </section>
          <section class="child">
            <div class="imgBox">
              <img src="pro.svg" class="img">
            </div>
          </section>
        </section>
    </div>
    <script src="script.js"></script>
  </body>
</html>