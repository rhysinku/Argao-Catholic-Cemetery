<?php
require_once 'dbconnection.php';


    
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $num = $_POST["contact"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

        $update = "INSERT INTO user (userName, userFname, userLname,userContact,userAddress,userMail,userPwd)
                    VALUES ('$username','$fname','$lname','$num','$address','$email','$password')";

            if(mysqli_query($conn,$update))
            {
                header("Location: ../../Users.php?msg=Success");
            }

            else
            {
                header("Location: ../../Users.php?msg=WentWrong");
            }
