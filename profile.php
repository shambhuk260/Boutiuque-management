	<?php

		include 'connection.php';

		include 'doc.php';

		include 'menu.php';

	if(!(isset($_SESSION['user'])))
	{	
	?>	
	<script type="text/javascript">
		alert("Access denied! Sign up first.");
		window.location="index.php";
	</script>
	<?php
	}
	$id = $_REQUEST['Xlzau'];

	// $fname = $_SESSION['fname']." ".$_SESSION['lname'];

	// $sql = "select * from rooms_booking where customer_name = '$fname'";

	// $result = $pdo->query($sql);

	?>

	<div id="shead">
	<div class="container">


	<div class="row">
	<div class="col-md-3">            
        <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                    
                     <div class="panel-body">
                     <p style="text-align:center;color:#FF4D4D; font-size:20px;">User Menu</p>
                     <hr/>
                     <form action="" method="POST">

                     <input type="submit" name="b_details" class="btn btn-default" value="Booking History" style="margin:5px;color:#FF3333;width:140px;">

                     <input type="submit" name="P_change" class="btn btn-default" value="Change Password" style="margin:5px;color:#FF3333;">

                     </form>
                     <hr/>
                            
                     </div>
        </div>
    </div>

	<div class="col-md-9">            
        <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">                    
                        <div class="panel-body">
					    
					    <?php

					    $suc = "";

					    if(isset($_POST['b_details']))
						{
							$fname = $_SESSION['fname']." ".$_SESSION['lname'];
						
							$sql = "select * from rooms_booking where customer_name = '$fname' and cancel = 0";
							try{
							$result = $pdo->query($sql);
							//echo "inside";
							}
							catch(PDOException $e)
							{
								echo "Something wrong!";
							}
							?>
							
							<div class="table-responsive" align="center">
							<table class="table-hover">
							<thead style="color:#FF4D4D;font-size:13px;border-bottom:2px solid #FFFF66;">
								<tr>
									<th>Booking Date&nbsp;&nbsp;&nbsp;</th>
									<th>Rooms&nbsp;&nbsp;&nbsp;</th>
									<th>Customer Name&nbsp;&nbsp;&nbsp;</th>
									<th>No Of Persons&nbsp;&nbsp;&nbsp;</th>
									<th>No Of Days&nbsp;&nbsp;&nbsp;</th>
									<th>Total Amount&nbsp;&nbsp;&nbsp;</th>
									<th>Payment Status&nbsp;&nbsp;&nbsp;</th>
									<th>Click To Cancel</th>								
								</tr>
							</thead>
							<tbody>
							
						<?php
							
						while($row=$result->fetch(PDO::FETCH_ASSOC))
						{							
							echo "<tr>";
							echo "<td>".$row['date']."</td>";
							echo "<td>".$row['room_no']."</td>";
							echo "<td>".$row['customer_name']."</td>";
							echo "<td>".$row['no_of_person']."</td>";
							echo "<td>".$row['no_of_days']."</td>";
							echo "<td>".$row['total_amount']."</td>";
							echo "<td>".$row['payment']."</td>";
							echo "<td><a href='cancel.php?bid=".$row['booking_id']."'>Cancel</a></td>";
							echo "</tr>";
						}
						
						?>
								</tbody>
							</table>
							</div>
						<?php
						}
						else{

							if(isset($_POST['c_pass']))
							{
							if(($_REQUEST['npass1'] != $_REQUEST['npass2']) || ($_REQUEST['npass1'] == "" || $_REQUEST['npass2'] == ""))
								{
							  ?>
									<script type="text/javascript">

									alert("password not matched!")
									
									</script>

								<?php
								}
								else
								{
									$npass = md5($_POST['npass1']);

									try{

										$pdo->query("update user set passwd='$npass' where id='$id'");
										$suc = "Password changed succesfully.";

									}
									catch(PDOException $e)
									{
										$suc = "Something wrong! try again.";
									}
									
								}
							}

							?>

							<div style="text-align:center">
							<form action="" method="POST">
							<label >Enter New Password <input class="form-control" type="password" name="npass1" ></label><br/>
							<label >Confirm Password &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control" type="password" name="npass2" ></label><br/>

							<input type="submit" class="btn btn-success" name="c_pass" value="Change">
							<br/>
							<label style="color:red;"><?php echo $suc; ?></label>
							</form>
							</div>
							<?php
						}					

					?>

				</div>
			</div>
	</div>

</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>
</div>

<?php
include('footer.php');
?>