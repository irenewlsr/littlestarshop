<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Little Star Shop</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/3ff17dbd4d.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <section>
      <header>
        <!-- Navigation Bar-->
        <div class="topnav" id="myTopnav">
          <a href="index.php" class="active">Home</a>
          <a href="about.html">About</a>
          <a href="showproductcus.php">Pre-Order</a>
          <a href="showStatusCus.php">Check Status</a>
          <a href="login.php">Login as admin</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i></a>      
        </div>
      </header>
      <div class="content">
        <div class="textBox">
          <h1>Welcome to <br> <span>Little Star Shop!</span></h1>
          <br>
          <p>Our shop provide you with genuine product ordered directly from the authorized lables.<br> We can gaurantee that all the product you pre order from our store is authentic, <br>so you can be sure thhat by shopping with us, you are supporting your artist. </p>
          <br>
          <br>
          <a href="showproductcus.php"><input type="button" class="btn1" value="PRE-ORDER"></a>
        </div>
        <div class="imgBox">
          <img src="star.svg" class="imghome">
        </div>
      </div>
    </section>
    <script src="script.js"></script>
  </body>
</html>