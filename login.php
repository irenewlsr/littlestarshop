<!DOCTYPE html>
<html>
<head>
	<title> Login</title>
	<link href="login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" a href="css\font-awesome.min.css">
  <title>Log In</title>
  <script src="https://kit.fontawesome.com/3ff17dbd4d.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
        <!-- Navigation Bar-->
        <div class="topnav" id="myTopnav">
          <a href="index.php">Home</a>
          <a href="about.html">About</a>
          <a href="showproductcus.php">Pre-Order</a>
          <a href="showStatusCus.php">Check Status</a>
          <a href="login.php"  class="active">Login as admin</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>     
        </div>
     </header>
	<div class="container">
    <div class="form-container">
      <div class="signin">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="sign-in-form">
            <h2 class="title">Sign In</h2>
            <div class="form-input">
              <p> </p>
              <input type="text" name="username" placeholder="USERNAME"/>
            </div>
            <div class="form-input">
              <p> </p>
              <input type="password" name="password" placeholder="PASSWORD"/>
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
          </form>
      </div>
    </div>
    <div class="imgBox">
      <img src="rocket.svg" class="img">
    </div>
	</div>

<?php 
	// $servername = "127.0.0.1:52921";
	// $username = "azure";
	// $password = "6#vWHD_$";
	// $dbname = "littlestar";
	
	include "db.inc.php";

	$conn = mysqli_connect($servername, $username, $password);
	mysqli_select_db($conn, $dbname);

	if(isset($_POST["username"])){
    
    $uname=$_POST["username"];
    $password=$_POST["password"];
    
    $sql="select * from admin where username='".$uname."' AND password='".$password."' limit 1";
    
    $result=mysqli_query($conn, $sql);
	
    if(mysqli_num_rows($result)==1){	
        header("location:amhome.html");
    }
    else{
        exit();
    }
}
?>
<script src="script.js"></script>
</body>
</html>