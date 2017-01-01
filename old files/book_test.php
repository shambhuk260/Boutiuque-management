 <?php

session_start();

 include('connection.php');

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

                      $total_rooms = $amount = $T_R_amount = 0;           //initialize no_of_rooms & amount to 0

                      foreach ($rooms as $room) {
                        //echo "<br/>".$room;

                        $total_rooms++;

                        $result = $pdo->query("select rooms.rate from rooms where rooms.room_no ='$room'");

                        if($row=$result->fetch(PDO::FETCH_ASSOC))
                        {
                            $amount += $row['rate']; 
                        }
                      }

                      $T_R_amount = $amount * $_SESSION['days'];


                      echo "<br/><label>Total no of rooms :</label>".$total_rooms."<br/>";

                      echo "<label>Amount payable for rooms: </label>".$T_R_amount;


                      if(isset($_SESSION['meal_cost']))
                      {
                        echo "<br/><label>Amount payable for meals : </label>".$_SESSION['meal_cost']."<br/>";

                        $total = $T_R_amount+$_SESSION['meal_cost'];

                        echo "<label>Total amount payable : </label>".$total;
                      }
                      else
                      {
                        $total = $T_R_amount;

                        echo "<br/><label>Total amount payable : </label>".$total;

                      }
                ?> 