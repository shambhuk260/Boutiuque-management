	<?php

		include 'connection.php';

		include 'doc.php';

		include 'menu.php';

	?>
	
<div id="shead">
	<div class="container">
	
	<?php
	if(!(isset($_SESSION['admin'])))
	{	
	$suc = "";
			
	?>
	
							<br/>
							<br/>
	
							<div style="text-align:center">
							<form action="admin_login.php" method="POST">
							<label style="color:#FF4D4D;font-size:18px;">Admin Login Panel</label>
							<hr/>
							<label >Enter Username <input class="form-control" type="text" name="auser" ></label><br/>
							<label >Enter Password &nbsp;&nbsp;&nbsp;&nbsp;<input class="form-control" type="password" name="apassword" ></label><br/>

							<input type="submit" class="btn btn-success" name="alogin" value="Login">
							<br/>
							<hr/>
							</form>
							</div>
							
							<br/>
							<br/>
							<br/>
							<br/><br/>
							<br/><br/>
							<br/><br/>
							<br/><br/>
							<br/><br/>
	<?php
	echo "</div></div>";
	}
	else
	{
	?>
	
	<div class="row">
	<div class="col-md-3">            
        <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                    
                     <div class="panel-body">
                     <p style="text-align:center;color:#FF4D4D; font-size:20px;">Admin Menu</p>
                     <hr/>
                     <form action="" method="POST">

                     <input type="submit" name="b_details" class="btn btn-default" value="Booking History" style="margin:5px;color:#FF3333;width:140px;">

                     <input type="submit" name="P_change" class="btn btn-default" value="Change Password" style="margin:5px;color:#FF3333;">
					 
					 <input type="submit" name="logout" class="btn btn-default" value="Logout" style="margin:5px;color:#FF3333;">

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
							$sql = "select distinct rooms_availability.room_no,rooms_availability.in_date,rooms_availability.out_date,rooms_availability.status,rooms.type from rooms_availability left join rooms on rooms_availability.room_no = rooms.room_no";
							try{
							$result = $pdo->query($sql);							
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
									<th>Room No&nbsp;&nbsp;&nbsp;</th>
									<th>Room Type&nbsp;&nbsp;&nbsp;</th>
									<th>Check In date&nbsp;&nbsp;&nbsp;</th>
									<th>Check Out Date&nbsp;&nbsp;&nbsp;</th>
									<th>Status&nbsp;&nbsp;&nbsp;</th>
									<th>Cancel Booking</th>									
								</tr>
							</thead>
							<tbody>
							
						<?php
							
						while($row=$result->fetch(PDO::FETCH_ASSOC))
						{							
							echo "<tr>";
							echo "<td>".$row['room_no']."</td>";
							echo "<td>".$row['type']."</td>";
							echo "<td>".$row['in_date']."</td>";
							echo "<td>".$row['out_date']."</td>";
							echo "<td>".$row['status']."</td>";
							echo "<td><a href='cancel_b.php?rno=".$row['room_no']."'>Cancel</a></td>";
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

									alert("password not matched!");									
									
									</script>

								<?php
								}
								else
								{
									$npass = md5($_POST['npass1']);

									try{

										$pdo->query("update user set passwd='$npass'");
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

if(isset($_POST['logout']))
{
	?>
	
	<script type="text/javascript">
				
				window.location="logout.php";
				
	</script>
	
	
	<?php
}



}
include('footer.php');
?>