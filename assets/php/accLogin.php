<?php 
require_once 'dbconnection.php';

$uname = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user WHERE userName = '$uname' and userPwd = '$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
    while ($row = mysqli_fetch_array($result))
    {
        $userID = $row['userId'];
        $username = $row['userName'];
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['userID'] = $userID;

        header("Location: ../../index.php?succ=Login");
    }
}
else
{
    header ("Location: ../Login.php?error=Invalid Account");
}