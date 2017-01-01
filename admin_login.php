<?php

	session_start();

	include('connection.php');	
	


		$admin = mysql_real_escape_string($_REQUEST['auser']);
		$admin_passwd = md5($_REQUEST['apassword']);
		
		
		$sql = "SELECT * FROM authentication WHERE username='$admin' AND password='$admin_passwd'";
			
			$result = $pdo->query($sql);
			
			if($row = $result->fetch(PDO::FETCH_ASSOC))
			{				
				$_SESSION["admin"] = $row['username'];
				
		
			?>
				<!-- header('location:index.php'); -->
				
				<script type="text/javascript">
				
				window.location="admin.php";
				
				</script>
				
			<?php
			}
			else
			{			
			?>
			<script type="text/javascript">
				
				alert("Wrong username or password!");
				window.location="admin.php";
				
			</script>
			
			<?php
			}
			?>