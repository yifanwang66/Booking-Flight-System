<!D0CTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title>Complete Booking - Stage 3 of 4 - Complete Bookings</title>
</head>
<body>
<table>
    <tr><td>Complete Booking - Stage 3 of 4 - Complete Bookings</td></tr>
    </table>
</body>
</html>
<?
session_start();
echo "<font color='#8a2be2'>Booking Details:</font>";

for ($i=0; $i< count($_SESSION["wholeInfoOfTickets"]); $i++){

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
echo "Number of Tickets:";
echo count($_SESSION["wholeInfoOfTickets"]);
echo '<br/>';
echo '<br/>';

echo "Credit Card Details supplied.";

$_SESSION['number']=$_POST['number'];
$_SESSION['name']=$_POST['name'];
$_SESSION['emd']=$_POST['emd'];
$_SESSION['eyd']=$_POST['eyd'];
$_SESSION['code']=$_POST['code'];
echo "<br>";
echo "<br>";
echo "<font color='#8a2be2'>Personal Info:</font>";
echo "<br>";
echo "First Name:";
echo $_SESSION['fname'];
echo "<br>";
echo "Last Name:";
echo $_SESSION['lname'];
echo "<br>";
echo "Address1:";
echo $_SESSION['address1'];
echo "<br>";
if ($_SESSION['address2'])
{echo "Address2:";
    echo $_SESSION['address2'];
    echo "<br>";
}
echo "Suburb:";
echo $_SESSION['suburb'];
echo "<br>";
if ($_SESSION['state'])
{echo "State:";
    echo $_SESSION['state'];
    echo "<br>";
}
if ($_SESSION['pcode'])
{echo "Post Code:";
    echo $_SESSION['pcode'];
}
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
if ($_SESSION['mobile']){
    echo "Mobile Phone:";
    echo $_SESSION['mobile'];
    echo "<br>";

}
if ($_SESSION['business']){
    echo "Business Phone:";
    echo $_SESSION['business'];
    echo "<br>";
}
if ($_SESSION['work']){
    echo "Work Phone:";
    echo $_SESSION['work'];
}
//echo $_SESSION['number'];
?>
<br>
<input type="submit" value="Confirm Payment" onclick="jump()"/>
<script type="text/javascript">
    function jump() {
        window.location = '';
    }
</script>