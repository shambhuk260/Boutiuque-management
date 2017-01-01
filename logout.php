<?php
	session_start();
	
	session_unset();

	// destroy the session
	session_destroy();
?>
	<script type="text/javascript">
	
	window.location="index.php";
	
	</script>