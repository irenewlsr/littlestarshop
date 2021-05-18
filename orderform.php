<?php
        include "db.inc.php";

	    $conn = mysqli_connect($servername, $username, $password);
	    mysqli_select_db($conn, $dbname);

        if(isset($_POST['submitorder']))
                {
                    $name=$_POST['Name'];
    	            $albumid=$_POST['AlbumID'];
                    $amount=$_POST['Amount'];
                    $contact=$_POST['Contact'];
                    $delivery=$_POST['Delivery'];
                    $address=$_POST['Address'];
        
                    $sql="INSERT INTO orderdetail(name,albumid,amount,contact,delivery,address,status) 
                    values('$name', '$albumid', '$amount', '$contact', '$delivery','$address','-')";
 
                    if (mysqli_query($conn, $sql)) {
                    //echo "New record created successfully !";
                    header("location:showStatusCus.php");
                    } else {
                    echo "Error: " . $sql . "" . mysqli_error($conn);
                    }
             
                    mysqli_close($conn);
                }
                
        if(isset($_POST['update'])){
               $id = $_POST['id'];
               $status = $_POST['ustatus'];

               $sql="UPDATE orderdetail SET status = '".$status."'  where ID = ".$id." ";
               
    	       $result=mysqli_query($conn, $sql);
               
               if ($result) {
                // echo "successfully!";
                header("location:showStatus.php");
                } else {
                 echo "Error: " . $sql . "" . mysqli_error($conn);
             }
             
             mysqli_close($conn);
        }    
                
?>