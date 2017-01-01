<?php

include 'connection.php';

include 'doc.php';

include 'menu.php';


 if(!(isset($_SESSION['user'])))
    {
?>
      <script type="text/javascript">
        alert("Sign in / Register first.");
        window.location="index.php";
      </script>

<?php
    }

?>

<div id="shead">
	<div class="container">

	<div class="row" style="padding:12px 0px">

    <div class="col-md-12">
    <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                    <div class="panel-heading"><h4 class="panel-title">2. Enter Your Details</h4></div>
    </div>
    </div>

        <div class="col-md-3">            
        <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                    <div class="panel-heading"><h4 class="panel-title">Billing Details</h4></div>
                        <div class="panel-body">
    <?php


        if(isset($_POST['select_room']))
        {

         if(isset($_POST['chk']))
            {
              $rooms = implode(", ",$_POST['chk']);
            }

            $_SESSION["rooms"] = $rooms;
          }

          echo "<label>You have choosen : </label>";

          if(isset($_SESSION['rooms']))
          {
            echo $_SESSION['rooms'];
          }
          else
          {
            echo "<label>No room selected!</label><br/>";
          }

          $rooms = explode(", ",$_SESSION['rooms']);

          $total_rooms = $amount = $T_R_amount = $meal_all = 0; 		  //initialize no_of_rooms & amount to 0
		  
		  $d1 = $_SESSION['in'];
		  $d2 = $_SESSION['out'];
		  
		  $dd1 = date_create_from_format('j-m-Y',$d1);
		  $dd2 = date_create_from_format('j-m-Y',$d2);
		   $in = date_format($dd1,'Y-m-d');
		   $out = date_format($dd2,'Y-m-d');	  
		  

          foreach ($rooms as $room) {

            $total_rooms++;
            $result = $pdo->query("select rooms.rate from rooms where rooms.room_no ='$room'");			
			

            if($row=$result->fetch(PDO::FETCH_ASSOC))
            {
                $amount += $row['rate'];
            }
          }

          $T_R_amount = $amount * $_SESSION['days'];

        if(isset($_SESSION['meal_cost']))
            {       
          $meal_all = $_SESSION['meal_cost'] * $_SESSION['days'];
            }

          echo "<br/><label>Total no of rooms :</label>".$total_rooms."<br/>";

          echo "<label>Total booking days :</label>".$_SESSION['days']."<br/>";

          echo "<label>Amount payable for rooms: </label>".$T_R_amount;


          if(isset($_SESSION['meal_cost']))
          {
            echo "<br/><label>Amount payable for meals : </label>".$meal_all."<br/>";

            $total = $T_R_amount+$meal_all;

            echo "<label>Total amount payable : </label>".$total;
          }
          else
          {
            $total = $T_R_amount;

            echo "<br/><label>Total amount payable : </label>".$total;

          }
    ?>
        </div>
        </div>


        <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                    <div class="panel-heading"><h4 class="panel-title">Your booking includes:</h4></div>
                        <div class="panel-body" style="font-size:16px;">
                            - Breakfast<br/>
                            - Free WiFi<br/>
                            - Free parking<br/>
                            - FREE cancellation
                        </div>
            </div>

        </div>

<?php

  $r = $_SESSION['rooms'];      //choosen rooms

if(isset($_POST['pay']))    
  {
  
  
		foreach ($rooms as $room) {			
						
			$pdo->query("UPDATE `rooms_availability` SET `in_date`='$in',`out_date`='$out',status='booked' WHERE `room_no`='$room'");
			
		}

          $todays_date = date("Y-m-d");
          $name = $_POST['fname']." ".$_POST['lname'];
          $adults = $_SESSION['adults'];

          $days = $_SESSION['days'];

          $bid ="vrsna".rand(00001,99999);

          try{
          $sql = "INSERT INTO rooms_booking VALUES('$todays_date','$bid','$r','$name','$adults','$days','$amount','$total','no','')";
          
          $pdo->query($sql);
		  
		//======================== Mailing Script ==================================================
		 
require_once('mail/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'tls://smtp.gmail.com:587';
//$mail->Port = 587;
$mail->Username = 'shambhuk260@gmail.com';
$mail->Password = 'astha4638';
$mail->SMTPAuth = true;

$mail->From = 'shambhuk260@gmail.com';
$mail->FromName = 'Varsana';
$mail->AddAddress($_POST['email']);
$mail->AddReplyTo('shambhuk260@gmail.com', 'Varsana');

$mail->IsHTML(true);
$mail->Subject    = "Varsana Booking Confirmation Details";
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";

$mail->Body = "<html><head></head><body><p>Hello ".$name."</p><br/><p>Your booking has been confirmed!</p><p>Booking id :".$bid." and booked on ".$todays_date."</p><br/><p>Regards Varsana</p><br/><p>For any assistance please contact +91 8235442043<p></body></html>";

if(!$mail->Send())
{
	?>
	<script type="text/javascript">
            alert("Send Mail failed! Check with customer care for confirmation mail");

            window.location="profile.php?Xlzau="+<?php echo $id; ?>+"&htoviq";
    </script>
	
	<?php
}
else
{
	?>
	<script type="text/javascript">
            alert("Booking Success! Check your mail for confirmation mail");

            window.location="profile.php?Xlzau="+<?php echo $id; ?>+"&htoviq";
    </script>
	
	<?php
}

	//=========================Mailing script ends here =======================================
		  
		  
		
        }
        catch(PDOException $e)
        {
          echo "<label>Something went wrong! Try again.</label>";
        }
        }
?>

		<div class="col-md-9">
        <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                    <div class="panel-heading"><h4 class="panel-title">Personal Info</h4></div>
                        <div class="panel-body">     

		<form action="" method="POST">
            <div class="form-group">
            	<label for="first_name">First Name</label><input type="text" class="form-control" id="" name="fname" placeholder="First Name" value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname']; } ?>" required>
            </div>
			<div class="form-group">
            	<label for="last_name">Last Name</label><input type="text" class="form-control" id="" name="lname" placeholder="Last Name" value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname']; } ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label><input type="email" class="form-control" id="" name="email" placeholder="Email Address" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label><input type="text" class="form-control" id="" name="mobile" placeholder="Mobile" maxlength="10" value="<?php if(isset($_SESSION['mobile'])){ echo $_SESSION['mobile']; } ?>" required>
            </div>
			<div class="form-group">
            	<label for="Number_of_Guests">Guests Details </label><input type="text" class="form-control" id="" name="guests" placeholder="Other Guests Details">
            </div>

            <!-- <div class="form-group">
                <label for="Meals">Meals Required &nbsp;</label>&nbsp;<input type="radio" name="meals" value="1" selected="yes">Yes &nbsp;<input type="radio" name="meals" value="0">No
           </div> -->
            <!-- <div class="form-group">
                <label for="rooms">Choosen Room No(s) </label><input type="text" class="form-control" id="" name="rooms" placeholder="No of rooms" value="<?php if(isset($_SESSION['rooms'])){ echo $_SESSION['rooms']; }  ?>" disabled="true">
            </div>
            <div class="form-group">
                <label for="amount">Amount payable</label><input type="text" class="form-control" id="" name="amount" placeholder="Total amount payable" value="<?php echo $total; ?>" disabled="true">
            </div> -->

                <input type="submit" class="btn btn-success btn-block" name="pay" value="Proceed">
        </form>
        </div>
    </div>

    </div>
    </div>
    </div>


	</div>
</div>

<?php

include 'footer.php';

?>