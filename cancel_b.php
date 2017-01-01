<?php

session_start();
include 'connection.php';

$rno = $_REQUEST['rno'];




$sql = "UPDATE `rooms_availability` SET `in_date`='0000-00-00',out_date='0000-00-00',`status`='available' WHERE `room_no` = '$rno'";

$pdo->query($sql);

	

?>

 <script type="text/javascript">
  alert("Booking Canceled Successfully!");

  window.location="admin.php";
 </script>

