<?php

include 'connection.php';


 $fname = $_REQUEST['fname'];
 $lname = $_REQUEST['lname'];
 $uname = $_REQUEST['username'];
 $email = $_REQUEST['email'];
 $mobile = $_REQUEST['mobile'];
 $password = md5($_REQUEST['password']);
 $addr =$_REQUEST['address'];


$sql = "INSERT INTO user VALUES('','$fname','$lname','$uname','$password','$mobile','$email','$addr')"; 

try{

	$pdo->query($sql);
?>
<script type="text/javascript">

alert("Registration successful...");


</script>

<?php
}
catch(Exception $e)
{
	echo "Something went wrong!";
}

?>

<script type="text/javascript">
window.location="index.php";
</script>