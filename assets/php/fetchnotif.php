<?php
//fetch.php;
if(isset($_POST["view"]))
{
$connect = mysqli_connect("localhost", "root", "", "cemetery");
 
 $query = "SELECT * FROM booking LEFT JOIN user ON booking.userid = user.userId WHERE adminapprove = 'waiting' ORDER BY corpsetimestamp DESC";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
    if($row['payment']=="pending"){
        $payment = 'Gcash';
    }
    elseif($row['payment']=="walkIn"){
        $payment = 'Walk In';
    }

   $output .= 
   '<a class="dropdown-item d-flex flex-column" href="Approval.php?ID='.$row["id"].'&&Name='.$row["userName"].'">
   <strong>'.$row["userName"].'</strong>
   <small>Send a '.$payment.' Payment Approval</small> 
</a>';
  //  '
  //  <li>
  //   <a href="#">
  //    <strong>'.$row["corpse"].'</strong><br />
  //    <small><em>'.$row["id"].'</em></small>
  //   </a>
  //  </li>
  //  <li class="divider"></li>
  //  ';
 }
}
 else
 {
  $output .= '<li style="text-align:center;">No Notification</li>';
 }
 
//  $query_1 = "SELECT * FROM booking WHERE adminapprove=0";
//  $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}

?>
