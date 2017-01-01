<?php

	include('connection.php');

	include 'doc.php';

	include 'menu.php';

?>


<div id="shead">
  <div class="container">
  

<?php

    if(!(isset($_SESSION['user'])))
    {
?>
      <script type="text/javascript">
        alert("Sign in / Register first.");
        window.location="index.php";
      </script>

<?php
    }

try{
    
        $start = $_REQUEST['startdate'];

        $end = $_REQUEST['enddate'];

        $days = ($end - $start);

       $adults = $_REQUEST['adults'];

       $_SESSION["adults"] = $adults;
	   
	   $_SESSION['in'] = $start;
	   $_SESSION['out'] = $end;

       

       if(isset($_REQUEST['meals']))
       {
        
        //$meal = $_REQUEST['meals'];
        $meal_cost = 100 * $adults;
        $_SESSION['meal_cost'] = $meal_cost;

       }
       
      $_SESSION['days'] = $days;


     if($adults == 1)
        {
        $sql = "SELECT * FROM `rooms` R INNER JOIN `rooms_availability` RA ON R.room_no = RA.room_no WHERE R.type = 'single' AND (RA.in_date <> '$start' AND RA.out_date <> '$end')";
        }
        else if($adults == 2)
        {
          $sql = "SELECT * FROM `rooms` R INNER JOIN `rooms_availability` RA ON R.room_no = RA.room_no WHERE R.type = 'double' AND (RA.in_date <> '$start' AND RA.out_date <> '$end')";
        }
        else
        {
          $sql = "SELECT * FROM `rooms` R INNER JOIN `rooms_availability` RA ON R.room_no = RA.room_no WHERE (RA.in_date <> '2015-04-17' AND RA.out_date <> '2015-04-18')";
        }

        //$row = $result->fetch(PDO::FETCH_ASSOC);

        $result = $pdo->query($sql);

        $i = 0;

        ?>
        <div class="col-md-12">
            <div class="panel panel-default" style="margin-top:10px;background:#66FF99;">
                            <div class="panel-heading"><h4 class="panel-title">1. Choose Your Rooms </h4></div>
            </div>
        </div>

        <?php

        echo '<div align="center" style="border-bottom:2px solid #666699; color:#666699; margin-bottom:5px;"><h3>Available Room Types</h3></div>';

        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {          
        ?>

<div class="panel-group" id="accordion" style="text-transform: capitalize;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" style="color:#33CC33;">
        <?php echo $row['type_details']." (".$row['type'].")"; $i++; ?></a>
      </h4>
    </div>
    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3"><img class="img-rounded" width="200px" height="160" src="<?php echo "img/".$row['iname'] ?>" alt="rooms thubnails"></div>
          <div class="col-md-9">

          
          <?php echo $row['services']."<br/>"; ?>
          <p>Room rate INR ₹<?php echo $row['rate']; ?></p>
           <!-- <div class="btn btn-success"><a  style="color:#fff; text-decoration:none;" href="booking.php?rid=">Book Now</a></div> -->

           <!-- <input type="hidden" name="rno" value=""> -->
            <form action="booking.php" method="POST">
                <label>Select this &nbsp</label><input type="checkbox" value="<?php echo $row['room_no']; ?>" name="chk[]">

          </div> <!-- Inner cols close -->
       </div>         <!-- inner row close -->
    </div>    <!-- panel body close -->
  </div>
  </div>      <!-- panel close -->

  </div>        <!-- panel group closed -->
 
<?php
} 
  /*if(!$row)
    echo "<p align='center'>No rooms available!</p>";
    */
?>

    <center><input type="submit" name="select_room" value="Reserve Your Selection" class="btn btn-success"></center>
    <br/>
  </form>
            <!--   <div class="col-md-4">
  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                       <p>Area for reserve </p>
                       </h4>
                       </div>
                       <div class="panel-body">
                       <p>Here comes the panel content!</p>
                       </div>
                  </div>
                
              </div>   
              </div>
              </div>
            -->

<?php
}
catch(Exception $e)
{
  $err = "something went wrong! please try again!";
}

?>

<?php if(isset($err)) { echo $err;} ?>

    </div>
</div>

</div>   
</div>

<?php
    include 'footer.php';
?>