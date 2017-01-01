<?php
include('doc.php');

include('menu.php');
?>


<div id="shead">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
			
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:10px;">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">			
			  <img src="img/resize reception.jpg" alt="...">
				  <div class="carousel-caption">
					<p style="color:red;font-size:16px;">Reception</p>
				  </div>
			</div>
			
			<div class="item">
			  <img src="img/resizelounge.jpg" alt="...">
				  <div class="carousel-caption">
					<p style="color:red;font-size:16px;">Lounge</p>
				  </div>
			</div>
			
			<div class="item">
			  <img src="img/resize bed room.png" alt="...">
				  <div class="carousel-caption">
					<p style="color:red;font-size:16px;">Presedential Suite</p>
				  </div>
			</div>

			<div class="item">
			  <img src="img/resize bed room 2.jpg" alt="...">
				  <div class="carousel-caption">
					<p style="color:red;font-size:16px;">Delux Suite</p>
				  </div>
			</div>
			
			<div class="item">
			  <img src="img/resize wedding-table.jpg" alt="...">
				  <div class="carousel-caption">
					<p style="color:red;font-size:16px;">Wedding packages</p>
				  </div>
			</div>
			
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		  
		  <script type="text/javascript">
		  $('.carousel').carousel({interval:2000});
		  </script>
		  
		  
		</div>
	</div>
	
		<div class="col-md-5" >
			<div class="panel panel-default" style="margin-top:10px;background:#66FF99;">				
				<div class="panel-heading" style="font-family:Arabella;color:#FF0000;"><h1 class="panel-title"><i>Welcome to Varsana</i></h1></div>
				<div class="panel-body">
				<h2 style="font-family:Arabella;"> Varsana </h2>
				<i><p>Varsana Boutique is the best place to stay in Jamshedpur area!
				with loads of royal services @ an affordable cost! 

				Opening May 2015. Step into a tropical garden surrounded by lush greenery and embrace the tranquillity of nature at Hotel Varsana,
				a peaceful oasis in the midst of one of Jamshedpur’s most popular urban districts that offers retail, business and Our Best Flexible Rates are perfect for travellers whose plans are subject to change.
				Elevate your experience with exceptional benefits and personalised services. Get the best in class experiance here.
				<br>
				<a href="about.php">Read More...</a></p></i>
				<br/>
				<br/>
				</div>
			</div>		
		</div>
	</div>
	
	<div class="row" style="margin-top:5px;">
			<div class="col-md-12">
				<div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
					<div class="panel-heading"><h4 class="panel-title">Check Availability <span style="color:#FF8080;">(Sign in/Register first to complete booking & exciting offers!)</span></h4></div>
						<div class="panel-body">
							<form class="form-inline" action="availability.php" method="POST">		<!-- availability form start -->
							
									<div class="form-group">
									<label for="StartDate">Check In</label>
									<input type="date" value="" id="from" class="form-control" name="startdate" placeholder="dd-mm-yyyy" maxlength="10" onblur="Dc()" required>
									</div>

									<div class="form-group">
									<label for="EndDate">Check Out</label>
									<input type="date" value="" id="to" class="form-control" name="enddate" placeholder="dd-mm-yyyy" maxlength="10" required>
									</div>
									
									<div class="form-group">
									<label for="adults">Adults</label>
									<input type="number" id="adults" class="form-control" name="adults" value="1" min="1" style="width:60px;" >
									</div>

									<div class="form-group">
					                <label for="Meals">Meals Required &nbsp;</label>&nbsp;<input type="checkbox" name="meals" value="1">
					           		</div>


								<!-- 	<div class="form-group">
									<label for="rooms">Rooms</label>
									<input type="number" class="form-control" name="rooms" value="1" min="1" style="width:60px;" >
									</div> 
 								-->
									<button type="submit" name="check" class="btn btn-default">Check</button>
							</form>			

										<!-- availability form end -->

							<!-- <div id="msg1">Space for validation message</div> -->
							
					    </div>	<!-- panel body end -->			
				</div>		<!-- panel end -->
			 </div>			<!-- col end -->
	</div>		<!-- 	row end -->
	
<div class="row" style="margin-top:5px; ">
	<div class="col-sm-6 col-md-4 col-lg-3">
		<div class="panel panel-default">
				<div class="panel-body">
				<img class="img-thumbnail" src="img/food.jpg" alt="img" />
				<a href="multi.php"><h3>Dining Restaurant</h3></a>
					<p>Varsana aspires to savour your taste buds. Proudly owning one of the best Buffet restaurants in Jamshedpur, 
					we propound a wide variety of cuisines portraying the diversified facets of Park Hyatt.</p>
				</div>
		</div>
		</div>
		
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<img class="img-thumbnail" src="img/meeting resize.png" alt="img" />
					<a href="conference.php"><h3>Meeting & Events</h3></a>
						<p>Our luxury  hotel in Jamshedpur is  ideal for conferences, meetings, as well as intimate business or 
						personal gatherings thereby playing host to some of the most famed events in the city. </p>
					<br/>
				</div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<img class="img-thumbnail" src="img/banq.jpg" alt="img" />
					<a href="wedding.php"><h3>Wedding Hall</h3></a>
					<p>From intimate settings to the grandest spaces, we offer you options ranging from the largest pillar-less 
					ballroom in the city to an array of 6 smaller venue options, to create timeless memories! </p>
						<br/>
				</div>
			</div>
		</div>
		
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="panel panel-default">
				<div class="panel-body">
				<img class="img-thumbnail" src="img/conf.png" alt="img" />
				<a href="conference.php"><h3>Conference Hall</h3></a>
					<p>Versatile and tastefully designed, to form a spacious  ballroom for special events. These function rooms are equipped such as high-speed internet or Wi-Fi, teleconferencing and audio visual systems. </p>
				</div>
			</div>
		</div>
</div>
</div>	
	
</div>
</div>

<?php
	include('footer.php');
?>