<?php

session_start();


//first element in a is an index of the flight in the whole flight array
//second to sixth are the seat info arrays
//the four element within seat info array is: seat number 1, child 2, wheelchair 3, special diet 4

if ($_SESSION["wholeInfoOfTickets"]){
    

	echo 'All Booked Flights';
	
	echo '<br/>';
	//print
	echo "<table border=\"1px\">";
	echo "<form action=\"delete_checked.php\" method=\"post\">"; 
		for ($i=0; $i< count($_SESSION['wholeInfoOfTickets']); $i++){
			echo '<tr><td>';
			foreach ($_SESSION['wholeInfoOfTickets'][$i] as $key => $value) {
				if ($key == 'route_no'){
				echo '<br/><br/>';
				}
				echo $key ." : ".$value;
				echo '<br/>';
			}
			for ($j=0; $j < count($_SESSION['wholeInfoOfTickets'][$i]['seats']); $j++)
			{
				for ($k=0; $k < count($_SESSION['wholeInfoOfTickets'][$i]['seats'][$j]); $k++){
					if ($k==0){
						if ($_SESSION["wholeInfoOfTickets"][$i]['seats'][$j][$k] != null){
							
							echo "Seat:" . $_SESSION["wholeInfoOfTickets"][$i]['seats'][$j][$k];
							echo '<br/>';
						}
					}else {
						if ($_SESSION["wholeInfoOfTickets"][$i]['seats'][$j][$k] != null){
						   echo $_SESSION["wholeInfoOfTickets"][$i]['seats'][$j][$k];
						  echo '<br/>';
						}
					}
				}
			}
			
			echo "</td><td><input type=\"checkbox\" name=\"checkbox[]\" class=\"selectedflight\" value=\"'.$i.'\" width=\"10\" class=\"quantity\"></td></tr>";
		}

	echo '<br/>';
	echo "Number of Tickets: ";
	echo count($_SESSION["wholeInfoOfTickets"]);

	echo "<tr><td><input type=\"button\" name=\"delete\" onclick=\"new delete_checked()\" value=\"Delete\" ></td></form>";
	echo "<td><form action=\"personaldetails.html\"><input type=\"submit\" name=\"checkout\" value=\"Check Out\" ></form></td>";
	echo "<td><button type=\"button\" name=\"clear\" onclick=\"clearall()\" value=\"Clear All Booking\" >Clear All Booking</button></td></tr></table>";
}else{
	echo 'No Booking available';
}
?>


<html>

	<meta charset="UTF-8">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">   </script>
    <script type="text/javascript">
        function checkout(){

            window.open("personaldetails.html","_self");

        }
		
		function clearall(){
			
			window.open("clear_booking.php","_self");
			
		}

    </script>

</html>
