<?php

session_start();

include('connection.php');

		$email = mysql_real_escape_string($_REQUEST['email']);
		$password = md5($_REQUEST['password']);
		
		
		$sql = "SELECT * FROM user WHERE email='$email' AND passwd='$password'";
			
			$result = $pdo->query($sql);
			
			if($row = $result->fetch(PDO::FETCH_ASSOC))
			{
				$_SESSION["id"]	= $row['id'];
				$_SESSION["user"] = $row['username'];
				$_SESSION["fname"] = $row['fname'];
				$_SESSION["lname"] = $row['lname'];
				$_SESSION["email"] = $row['email'];
				$_SESSION["mobile"] = $row['mobile'];
				
				?>

				<!-- header('location:index.php'); -->
				
				<script type="text/javascript">
				
				window.location="index.php";
				
				</script>
				
			<?php
			}
			else
			{
				$_SESSION["errmsg"]= "Wrong user Name or, Password!";
				
			?>
				<script type="text/javascript">

				alert("Wrong username or, password!");
				
				window.location="index.php";
				
				</script>
		<?php
			}
		?>
	
	
