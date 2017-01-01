<?php
session_start();
?>

<div id="snav"> 
	<div class="container">
        <div class="row">
			<div class="col-md-3">
			<h2><a href="index.php"><img style="padding-top:-10px;" class="img-rounded" src="img/logo.png" alt="booking" width="135px" height="70px" /></a></h2>
			</div>
			<div class="col-md-9" style="padding-top:20px;">
				<ul class="nav nav-pills" style="float:right; margin:10px 0px;">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown"> 
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#fff;"> 
						 Services <span class="caret"></span> 
					  </a> 
					  <ul class="dropdown-menu"> 
						 <li><a href="suite.php">Suites</a></li> 
						 <!-- <li><a href="banquet.php">Banquet Halls</a></li> -->
						 <li><a href="wedding.php">Wedding Halls</a></li> 
						 <li><a href="conference.php">Conferance Halls</a></li> 
						 <li><a href="multi.php">Multi-quisine Restaurant</a></li>
					  </ul> 
				   </li> 
					<li ><a href="about.php" style="color:#fff;">About Us</a></li>
					<li ><a href="contact.php" style="color:#fff;">Contact Us</a></li>
				
				<?php
				
					if(!(isset($_SESSION['user'])))
					{
				?>
					<div class="navbar-right">
					<li><a class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo" style="height:45px;font-size:17px;">Sign in</a></li>
				<?php
					}
					else{
                            $id = $_SESSION['id'];

					echo "<li><a style='color:#FFFF00;' title='Click to view profile.' href='profile.php?Xlzau=$id&htoviq'>Hello ".$_SESSION["user"]."</a></li>";
				?>
					<li><a class="btn btn-success" style="height:45px;font-size:17px;" href="logout.php">Sign out</a></li>
				<?php
					}
				?>				
                    <!--sign in box start-->
                    <div class="modal fade bs-example-modal-lg" id="signin" tabindex="-1" role="dialog" aria-labelledby="Signin" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="padding-top: 50px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel"><center>Join us it's Free</center></h4>
                                </div>
                                <div class=" col-xs-12 col-sm-6 modal-body" style="padding: 50px;">
                                    <div class="log-heading">
                                        Sign in Here<hr>
                                    </div>
                                    <form action="login_check.php" method="POST">
                                        <div class="form-group">
                                            <!--<label for="" class="control-label">User Name</label>-->
                                            <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <!--<label for="" class="control-label">Password</label>-->
                                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                        </div>
                                        <!-- <div class="checkbox">
                                            <label><input type="checkbox" name="remenberMe">Remember Me</label>
                                        </div> -->
                                        <button type="submit" class="btn btn-success btn-block" onclick="validate()"><span class="glyphicon glyphicon-lock"> Sign&nbsp;in</span></button>                                        
                                    </form>
                                     <br><a href="admin.php">Click Here for Admin Login</a>

                                     <!-- <div id="msg">hello</div> -->
                                </div>
                                <div class=" col-xs-12 col-sm-6 modal-body" style="border-left: 1px solid; padding: 50px;">
                                    <div class="log-heading">
                                        Don't have account? Register here<hr>
                                    </div>
                                    <form action="register.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" name="fname" placeholder="First Name" required>
                                        </div>
										<div class="form-group">
                                            <input type="text" class="form-control" id="" name="lname" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" name="username" placeholder="User Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" name="mobile" placeholder="Mobile" maxlength="10" required>
                                        </div>
										<div class="form-group">
                                            <input type="password" class="form-control" id="" name="password" placeholder="Password" maxlength="16" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" name="address" placeholder="Address" required>
                                        </div>
                                        <input type="submit" class="btn btn-success btn-block" value="Sign up">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    
                                </div>
                            </div>
                         </div>
                    </div>
                        <!--sign in box start-->
                </div>
				</ul>

			</div>
		</div>
	</div>
</div>