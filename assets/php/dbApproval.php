<?php 

$conn = mysqli_connect("localhost", "root", "", "cemetery");

$id = $_POST['id'];

if (isset($_POST["Gcash"]))
{
    $sql ="UPDATE booking SET payment = 'Gcash Paid', adminapprove = 'Gcash Approve', corpsetimestamp = now() WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.php?succ=Approve");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

if (isset($_POST["walkIn"]))
{
    $sql ="UPDATE booking SET payment = 'Walk In', adminapprove = 'Walk In Approve', corpsetimestamp = now() WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.php?succ=Approve");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

if (isset($_POST["GcashNo"]))
{
    $sql ="UPDATE booking SET payment = 'pending', adminapprove = 'Gcash Not Approve', corpsetimestamp = now() WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../Index.php?succ=notApprove");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}



if (isset($_POST["WalkinNo"]))
{
    $sql ="UPDATE booking SET payment = 'pending', adminapprove = 'Walk In Not Approve', corpsetimestamp = now() WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../Index.php?succ=notApprove");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

if (isset($_POST["later"]))
{
  header("Location: ../../Index.php?succ=Cancel");
}

