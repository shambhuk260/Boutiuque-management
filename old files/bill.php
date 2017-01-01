<?php

include 'doc.php';
include 'menu.php';


?>

<div class="shead">
	<div class="container">
		<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
      		Bill Invoice
      	</h4>
      	<div class="panel-body">
		<?php
			echo $_REQUEST['fname']." ".$_REQUEST['lname']."<br/>";
			echo $_REQUEST['email']."<br/>";
			echo $_REQUEST['mobile']."<br/>";
			echo $_REQUEST['guests']."<br/>";
			echo $_SESSION['rooms']."<br/>";
			echo $_SESSION['amount'];
		?>
		</div>
	</div>
</div>


<?php
include 'footer.php';
?>