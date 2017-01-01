<?php

session_start();
include 'connection.php';

$bid = $_REQUEST['bid'];
$id = $_SESSION['id'];

$rooms = explode(", ",$_SESSION['rooms']);


$sql = "UPDATE `rooms_booking` SET `cancel`=1 WHERE `booking_id` = '$bid'";

$pdo->query($sql);

	foreach ($rooms as $room) {
		try{
		$pdo->query("UPDATE `rooms_availability` SET `in_date`='0000-00-00',`out_date`='0000-00-00',status='available' WHERE `room_no`='$room'");
		}
		catch(PDOException $e)
		{
		echo "update failed";
		}
	}

?>

 <script type="text/javascript">
  alert("Booking Canceled Successfully!");

  window.location="profile.php?Xlzau="+<?php echo $id; ?>+"&htoviq";
 </script>

