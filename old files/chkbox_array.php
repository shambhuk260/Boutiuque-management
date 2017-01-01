<?php

session_start();
	
	if(isset($_POST['submit']))
	{
		if(isset($_POST['chk']))
		{

			$fevlang = implode(", ",$_POST['chk']);
		}

		$_SESSION["fevlang"] = $fevlang;
	}

	if(isset($_SESSION['fevlang']))
	{
		echo $_SESSION['fevlang'];
	}
	else
	{
		echo "not set.";
	}

?>

<form action="" method="POST">
	<input type="checkbox" name="chk[]" value="c">c
	<br/>
	<input type="checkbox" name="chk[]" value="c++">c++
	<br/>
	<input type="checkbox" name="chk[]" value="java">java
	<br/>
	<input type="checkbox" name="chk[]" value="php">php
	<br/>

	<input type="submit" name="submit" value="Submit">
	<input type="reset" value="Reset">
</form>