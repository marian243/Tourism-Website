<?php
include_once ("server.php");
//echo "page";
	//$myname ="";
	if (isset($_POST['submit']))
    {
        //echo "page";
        $myname = $_POST["location"];
        $mydate = $_POST["date"];
        $mydate1 = $_POST["date1"];
        $people = $_POST["people"];
        $sql = "SELECT flightid, price*$people FROM flights WHERE Place = '$myname' AND CheckIn = '$mydate' AND checkout = '$mydate1'";
        $result = connect("bdtouristation", $sql);
        //$result = 
        if($result->num_rows>0)
          {
              //echo "result";
              echo '<div style="font-size:2em;color:Black">FLIGHTS AVAILABLE: </div>';
              echo nl2br("\n");
              //$_SESSION['variable_name_1'] = $result->fetch_assoc();
              while($row = $result->fetch_assoc())
              {
                  echo "ID : ". $row["flightid"]." | "." Price :". $row["price*$people"]."<br>";
                  echo '<div class="animate-box text-center">';
                  echo '<p><a href="book.php" class="btn btn-primary">Book Now!</a></p>';
                  echo '</div>';
                  
              }
          }
          else {
              echo "Nothing to show";
          }
    }
?>