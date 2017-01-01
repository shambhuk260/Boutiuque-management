<?php

include('connection.php');

include('doc.php');

include('menu.php');


	if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$password = $_POST['passwd'];
		
		
		$sql = "SELECT * FROM user WHERE username='$username' AND passwd='$password'";	
			
			$result = $pdo->query($sql);
			
			if($row = $result->fetch(PDO::FETCH_ASSOC))
			{
				$_SESSION["user"] = $row['fname'];
				//echo "login success<br />";
				//echo "Hello ".$row['fname'];
			}
			else
			{
				$_SESSION["errmsg"]= "Wrong user Name or, Password!";
			}
	}
?>

<!--
<h3>Page for DB check</h3>

<form action="" method="GET">

<input type="text" name="uname" placeholder="User Name" /> <br/>
<input type="password" name="passwd" placeholder="Password" /><br/>

<input type="submit" value="Login" name="login" />

</form> -->

<div id="shead">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
					<div class="panel-body">
						<h2>Boutique <a href="#"><img class="img-circle" src="img/booking.png" alt="booking" width="80px" height="30px" /></a></h2>
						<p>Boutique is the best place to stay in Jamshedpur area!
						with loads of royal services @ an affordable cost! lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.lorem ipsum dolor.
						lorem ipsum dolor.lorem ipsum dolor.
						</p>
					</div>
				</div>
			</div>

	<div class="col-md-4">
			<div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
					<div class="panel-body">
						<div class="page-header">
							<h3>Login Area</h3>
						</div>
						
						 <form role="form" action="" method="POST">
							  <div class="form-group">
								<label for="uname">User Name:</label>
								<input type="text" class="form-control" id="uname" name="uname" placeholder="User Name">
							  </div>
							  <div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd" name="passwd" placeholder="Password">
							  </div>
							  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-backward Back"> Back </span></button>
							  <button type="submit" class="btn btn-primary" name="login" value="Login" onclick="validate()"><span class="glyphicon glyphicon-lock"> Login </span></button>
						</form>
							
							<p> <hr /> </p>
							
							<div id="msg" style="border:solid 1px red; padding:1px;"><?php if(isset($_SESSION['errmsg'])) { echo $_SESSION['errmsg'];} ?></div>
					</div>
			</div>
	</div>
	</div>
	</div>
	
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	
</div>

<?php

include('footer.php');

?>