<?php
    if(!isset($_SESSION['user_id'])){
        header('location: ../login');
        exit;
        }else{
            $admin = $_SESSION['user_id'];
            $sql = "SELECT AdminID FROM admin WHERE AdminID='$admin';";
            $result=mysqli_query($conn,$sql);
            $queryResult=mysqli_num_rows($result);
            if ($queryResult == 0){
                header('location: ../login');	 	
            }
        }
?>