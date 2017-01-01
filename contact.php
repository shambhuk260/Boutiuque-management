<?php

include ('connection.php');

include('doc.php');

include('menu.php');

 $errmsg = "";

if(isset($_POST['send']))
{

	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $message = $_POST['queries'];

	try{
			$sql = "INSERT INTO `ques`(`id`, `name`, `email`, `queries`) VALUES ('','$name','$email','$message')";

			$pdo -> query($sql);

			$errmsg ="Successfully submitted.";		

		}
		catch(Exception $e)
		{
			$errmsg ="Oops! Something went wrong! Try again.";		
		}
}

?>

<div id="shead">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
					<div class="panel-body">
						<h2>Contact us </h2>
						<p style="font-size:14px;">We are here to answer any questiuons you may have about our Varsana experiances. reach out to us and we will response as soon as we can. 

						Even if there is somethng you have always wanted to experiance and can't find it on Varsana, let us know and we promise we will do our best to find it for you and send you there. 
						</p>

						<br/>
						<br/>

						<form action="" method="POST" >

						<div class="form-group">
			            	<label for="first_name"><span style="word-spacing: -10px;" class="glyphicon glyphicon-user"> &nbsp;NAME *</span></label><input type="text" class="form-control" id="" name="name" placeholder="Name" value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname']; } ?>" required>
					    </div>
						<div class="form-group">
			            	<label for="last_name"><span style="word-spacing: -10px;" class="glyphicon glyphicon-envelope"> &nbsp;EMAIL *</span></label><input type="text" class="form-control" id="" name="email" placeholder="E-Mail Id" value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname']; } ?>" required>
			            </div>

			            <div class="form-group">
			            <label><span style="word-spacing: -10px;" class="glyphicon glyphicon-edit"> &nbsp;MESSAGE *</span></label>
			            <textarea class="form-control" name="queries" placeholder="Your Feedback/Queries..." required></textarea>
			            </div>

			            <div class="form-group">
			             <input type="submit" class="btn btn-warning btn-block" name="send" value="SEND">
			             </div>

            			</form>

            			<center><span class="label label-danger"><?php echo $errmsg; ?></span></center>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
					<div class="panel-body">
					<label>EMAIL</label>
					<br/>
					varsana@gmail.com
					<br/>
					<hr/>
					
					<label>WEBSITE</label>
					<br/>
					www.varsana.com
					<br/>
					<hr/>

					<label>TELEPHONE</label>
					<br/>
					+91 8235442043
					<br/>
					+91 9304536005
					<br/>
					<br/>
					<hr/>

					<label>ADDRESS</label>
					<br/>
					Adityapur-2,<br/>
					Jamshedpur,<br/>
					831014,<br/>
					Jharkhand.
					<br/>
					<hr/>

					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	
	<br/>
</div>


<?php
include('footer.php');
?>
