<?php 

require_once 'dbconnection.php';

$gcash = $_POST['gcash'];
$accpass = $_POST['accpass'];
$id2 = $_POST['pID'];
$profile = $_POST['profile'];
$refNum = $_POST['refNum'];
$admin = "waiting";


$imagename =$_FILES['bookimg']['name'];
$imagetemp = $_FILES['bookimg']['tmp_name'];
$newimage = uniqid("CemimgProfile-",true).'.'.$imagename; // rename image to avoid duplicate

if (isset($_POST['pay']))
{
    $sql = "SELECT * FROM user WHERE userName = '$profile'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($accpass == $row['userPwd'])
    {
      
        $sql3 = "SELECT RefNum FROM booking WHERE Refnum = '$refNum'";
        $result2 = mysqli_query($conn, $sql3);
        

        if(mysqli_num_rows($result2))
      
        {
            header("Location: ../../UserProfile.php?error=IncorrectRefNum");    
           
        }
        else{
        

            $sql2 = "UPDATE booking SET adminapprove = '$admin' , payment = 'pending',  gcash='$gcash' ,Refnum = '$refNum', bookimg = '$newimage', corpsetimestamp = now() WHERE id = '$id2' ";
            if(mysqli_query($conn,$sql2))
            {
                $location = '../../assets/imageDb/'.$newimage;
                move_uploaded_file($imagetemp,$location);    
               /*  move_uploaded_file($imagetemp,$location);
                echo mysqli_errno($conn); */
                header("Location: ../../UserProfile.php?succ=PaySuc");
                
            }
           

        }

    }
    else
    {
        header("Location: ../../UserProfile.php?error=IncorrectPass");
      
    }

}
else
{
 echo ("Error".mysqli_error($conn));
}