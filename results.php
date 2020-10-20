
<?php
   include("config.php");
	   if(isset($_POST['submit']) && isset($_POST['peoplef']) && $_POST['peoplet'])
	   {
           $flag=0;
           //$submit = $_REQUEST['submit'];
			$price_from = $_POST['peoplef'];
			$price_to = $_POST['peoplet'];
                if (empty($_POST["peoplef"])) {
                
                $flag=0;
        } 
           
           $flag=1;
           if($flag=1)
           {
                  $sql = "SELECT hotel_name,Hotel_price,room_type,room_status FROM hotel WHERE Hotel_price BETWEEN '$price_from' 
			 		and '$price_to' ";
               $result =mysqli_query($db,$sql);
              
			 		while($row = $result->fetch_assoc())
			 	{
			 		echo $row["hotel_name"]."     ".   $row["Hotel_price"].  $row["room_type"]."     ".   $row["room_status"]."     ". "<br>";
			 	}
           }
          
		

		
    }
	   
	
	
?>
