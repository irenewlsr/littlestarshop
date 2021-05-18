<?php
        include "db.inc.php";

	    $conn = mysqli_connect($servername, $username, $password);
	    mysqli_select_db($conn, $dbname);

        if(isset($_POST['create'])){
            
            $name = $_POST['Name'];
            $price = $_POST['Price'];
            $end = $_POST['EndDate'];
            
            $sql = "INSERT INTO product(Name,Price,EndDate) VALUES ('$name','$price','$end')";
            
            if (mysqli_query($conn, $sql)) {
                //echo "New record created successfully !";
                header("location:showProduct.php");
             } else {
                 echo "Error: " . $sql . "" . mysqli_error($conn);
             }
             
             mysqli_close($conn);
	    }
        
        if(isset($_POST['delete'])){
               $id = $_POST['id'];
           
               $sql="Delete from product where AlbumID = '".$id."' ";
               
    	       $result=mysqli_query($conn, $sql);
               
               if ($result) {
                // echo "successfully!";
                header("location:showProduct.php");
                } else {
                 echo "Error: " . $sql . "" . mysqli_error($conn);
             }
             
             mysqli_close($conn);
        }   
?>