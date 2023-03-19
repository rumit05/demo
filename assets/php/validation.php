<?php
    include("config.php");
    // $conn = mysqli_connect('localhost','root','','eatery');
   $email = $_POST['Email'];
   $username = $_POST['username'];
   $password= $_POST['password'];


    $query = "insert into customer (cust_email,cust_username,cust_password) values ('$email','$username','$password')"; 
    $qua= mysqli_query($conn,$query);
    if(!$qua)
    {
        echo mysqli_error($conn);
    }else{
        header("location:../../login.html");
    }


?>