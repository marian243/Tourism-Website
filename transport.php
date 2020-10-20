<?php
include_once ("server.php");
//echo "page";
	//$myname ="";
	if (isset($_POST['submit']))
    {
        //echo "page";
        $myname = $_POST["location"];
        $mydate = $_POST["date"];
        $people = $_POST["people"];
        $sql = "SELECT flightid,price, price*$people FROM flights WHERE Place = '$myname' AND CheckIn = '$mydate'";
        $result = connect('bdtouristation', $sql);
        //$result = 
        if($result->num_rows>0)
          {
              //echo "result";
              echo '<div style="font-size:2em;color:Black">FLIGHTS AVAILABLE: </div>';
              echo nl2br("\n");
              //$_SESSION['variable_name_1'] = $result->fetch_assoc();
              while($row = $result->fetch_assoc())
              {
                  echo "ID : ". $row["flightid"]." | "." Price :". $row["price"]." Price for $people :". $row["price*$people"]."<br>";
                  echo '<div class="animate-box text-center">';
                  echo '<p><a href="book.php" class="btn btn-primary">Book Now!</a></p>';
                  echo '</div>';
              }
          }
          else {
              echo "Nothing to show";
          }
    }
    
    if (isset($_POST['submit1']))
    {
        $myname1 = $_POST["location1"];
        $mydate1 = $_POST["date2"];
        $sql1 = "SELECT carid, price FROM cars WHERE Place = '$myname1' AND CheckIn = '$mydate1'";
        $result1 = connect('bdtouristation', $sql1);
        //$result = 
        if($result1->num_rows>0)
          {
            echo '<div style="font-size:2em;color:Black">CARS AVAILABLE: </div>';
              echo nl2br("\n");
              //$_SESSION['variable_name_1'] = $result->fetch_assoc();
              while($row = $result1->fetch_assoc())
              {
                  echo "ID :". $row["carid"]." | "."Price :". $row["price"]."<br>";
                 echo '<div class="animate-box text-center">';
                  echo '<p><a href="book.php" class="btn btn-primary">Book Now!</a></p>';
                  echo '</div>';
              }
          }
          else {
              echo "Nothing to show";
          }
    }

    if (isset($_POST['submit2']))
    {
        $myname2 = $_POST["location2"];
        $mydate2 = $_POST["date4"];
        $mydeck = $_POST["category"];
        $sql2 = "SELECT cruiseid, price FROM cruises WHERE Place = '$myname2' AND CheckIn = '$mydate2' AND suite = '$mydeck'";
        $result2 = connect('bdtouristation', $sql2);
        //$result = 
        if($result2->num_rows>0)
          {
            echo '<div style="font-size:2em;color:Black">CRUISES AVAILABLE: </div>';
              echo nl2br("\n");
              //$_SESSION['variable_name_1'] = $result->fetch_assoc();
              while($row = $result2->fetch_assoc())
              {
                  echo "ID: ". $row["cruiseid"]." | "." Price: ". $row["price"]."<br>";
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