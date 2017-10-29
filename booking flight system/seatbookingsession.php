<?php

session_start();
echo 'All Booked Flights';
//echo $_POST['foo'];
echo '<br/>';

//first element in a is an index of the flight in the whole flight array
//second to sixth are the seat info arrays
//the four element within seat info array is: seat number 1, child 2, wheelchair 3, special diet 4

if (!$_SESSION["wholeInfoOfTickets"]){
    $_SESSION["wholeInfoOfTickets"]=array();
}
$flights = array();
$flights = $_SESSION['tempflights'][$_SESSION['flight_array_id']];
$seats = array();
for ($i=0; $i<5; $i++){
    if ($_POST['seat'][$i]) {
        
		
        array_push($seats, $_POST['seat'][$i]);
        
    }
}
$flights['seats'] = array();
$flights['seats'] = $seats;
 //print_r($flights);
array_push($_SESSION['wholeInfoOfTickets'], $flights);
 //print_r($_SESSION['wholeInfoOfTickets']);
//print
    for ($i=0; $i< count($_SESSION['wholeInfoOfTickets']); $i++){

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
    }

echo '<br/>';
echo "Number of Tickets:";
echo count($_SESSION["wholeInfoOfTickets"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seats</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">   </script>
    <script type="text/javascript">
        function Bookmore() {
//            $.post('<?php //echo $_SESSION["url"]; ?>//', function (data) {
//
//            });
//            window.location = '<?php //echo $_SESSION["url"]; ?>//';
//            document.frm.submit();
        }
        function Clear(){
            window.location = 'clear_booking.php';
        }
    </script>
</head>
<body>
<form action="index.html" method="get" name='frm'>
<tr>
        <td>
                <input type='hidden' name="showwwnotice" value="100">
                <input type="submit" value="Book more Flights">
        </td>
</tr>
</form>
<form action="clear_booking.php" method="get" name='frm'>
    <tr>
<!--    <td><button type="button" onclick="Clear()">Clear all Booked Flights</button></td>-->
        <input type='hidden' name="showwnotice" value="100">
        <input type="submit" value="Clear all Booked Flights">
    </tr>
</form>
<form action="personaldetails.html">
    <tr>
        <td colspan="2" align="center">
            <input type="submit" class="submit" value="Process to check out">
        </td>
    </tr>
</form>
</body>
</html>
