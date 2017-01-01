<?php
include('doc.php');

include('menu.php');

?>

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
						
						 <form role="form">
							  <div class="form-group">
								<label for="email">Email address:</label>
								<input type="email" class="form-control" id="email">
							  </div>
							  <div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" class="form-control" id="pwd">
							  </div>
							  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-backward Back"> Back </span></button>
							  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"> Login </span></button>
						</form>
							
							<p> <hr /> </p>
							<p id="msg"></p>
					</div>
			</div>
			</div>
	</div>
</div>

<?php
include('footer.php');
?>