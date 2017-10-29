<?php

//Procedural style
$connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
 
$from_city = $_REQUEST['from_city'];
$to_city = $_REQUEST['to_city'];

if($from_city == ""){

	$query_string = "select * from flights where to_city ='".$to_city."';";
	 
	$result = mysqli_query($connection,$query_string);
	 
	$num_rows = mysqli_num_rows($result);
	//print $from_city;
	//print $num_rows;
	if ($num_rows > 0) {
        print "<table>";
        print "<form action=\"updatetempflight.php\" method=\"post\">";
        print "<tr>\n";
        print "<td>route number</td>";
        print "<td>origin</td>";
        print "<td>destination</td>";
        print "<td>price</td>";
        print "<td>quantity</td>";
        print "</tr>";
        
        $i = 0;
        session_start();
        while ($a_row = mysqli_fetch_assoc($result)) {
            print "<tr>\n";
            print "<td>" . $a_row['route_no'] . "</td>";
            print "<td>" . $a_row['from_city'] . "</td>";
            print "<td>" . $a_row['to_city'] . "</td>";
            print "<td>" . $a_row['price'] . "</td>";
            print "<td><input type=\"checkbox\" name=\"checkbox[]\" class=\"searchitem\" value=\"".$i."\" width=\"10\" class=\"quantity\"></td>";
            print "</tr>";  
                if ($i == 0) {
					$flight = array();
					$_SESSION["tempflights"] = array();
					$flight['route_no']= $a_row['route_no'];
					$flight['from_city']= $a_row['from_city'];
					$flight['to_city']= $a_row['to_city'];
					$flight['price']= $a_row['price'];
					//print "1st flight = " . $flight['route_no'];
                     array_push($_SESSION['tempflights'], $flight);
                    $_SESSION["url"] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                }
                else{
                  $flight = array();
				  $flight['route_no']= $a_row['route_no'];
					$flight['from_city']= $a_row['from_city'];
					$flight['to_city']= $a_row['to_city'];
					$flight['price']= $a_row['price'];
					//print_r($_SESSION['tempflights']);
					//print "remaining flight = " . $flight['route_no'];
                   array_push($_SESSION['tempflights'], $flight);
                }
            $i++;
            }

         print "<table width=\"30%\"><tr>";
		print "<td><button type=\"button\" onclick=\"gotoSearchPage()\">< New Search</button></td>";
        print "<td>";
        print "<input type=\"submit\" value=\"Make Booking for selected flight!\" onclick=\"return check_select()\">";
        print "</td>";
        print "</tr>";
		print "</table>";
        print "</form>";
        print "</table>";
		
	}else{
		print "false1";
	}
	
}else if($to_city == ""){
	
	$query_string = "select * from flights where from_city ='".$from_city."';";
	 
	$result = mysqli_query($connection,$query_string);
	 
	$num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        print "<table>";
        print "<form action=\"updatetempflight.php\" method=\"post\">";
        print "<tr>\n";
        print "<td>route number</td>";
        print "<td>origin</td>";
        print "<td>destination</td>";
        print "<td>price</td>";
        print "<td>quantity</td>";
        print "</tr>";
        
        $i = 0;
        session_start();
        while ($a_row = mysqli_fetch_assoc($result)) {
            print "<tr>\n";
            print "<td>" . $a_row['route_no'] . "</td>";
            print "<td>" . $a_row['from_city'] . "</td>";
            print "<td>" . $a_row['to_city'] . "</td>";
            print "<td>" . $a_row['price'] . "</td>";
            print "<td><input type=\"checkbox\" name=\"checkbox[]\" class=\"searchitem\" value=\"".$i."\" width=\"10\" class=\"quantity\"></td>";
            print "</tr>";  
                if ($i == 0) {
					$_SESSION["tempflights"] = array();
					$flight = array();
					$flight['route_no']= $a_row['route_no'];
					$flight['from_city']= $a_row['from_city'];
					$flight['to_city']= $a_row['to_city'];
					$flight['price']= $a_row['price'];
					
                     array_push($_SESSION['tempflights'], $flight);
                    $_SESSION["url"] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                }
                else{
                 $flight = array();
				 $flight['route_no']= $a_row['route_no'];
					$flight['from_city']= $a_row['from_city'];
					$flight['to_city']= $a_row['to_city'];
					$flight['price']= $a_row['price'];
                   array_push($_SESSION["tempflights"], $flight);
                }
            $i++;
        }

         print "<table width=\"30%\"><tr>";
		print "<td><button type=\"button\" onclick=\"gotoSearchPage()\">< New Search</button></td>";
        print "<td>";
        print "<input type=\"submit\" value=\"Make Booking for selected flight!\" onclick=\"return check_select()\">";
        print "</td>";
        print "</tr>";
		print "</table>";
        print "</form>";
        print "</table>";
    
		
	}else{
		print "false2";
	}
	
}else if($from_city != "" && $to_city != ""){
	$query_string = "select * from flights where from_city = '".$from_city."' and to_city ='".$to_city."';";
	 
	$result = mysqli_query($connection,$query_string);
	 
	$num_rows = mysqli_num_rows($result);
	//print $from_city;
	//print $num_rows;
	if ($num_rows > 0) {
        print "<table>";
        print "<form action=\"updatetempflight.php\" method=\"post\" >";
        print "<tr>\n";
        print "<td>route number</td>";
        print "<td>origin</td>";
        print "<td>destination</td>";
        print "<td>price</td>";
        print "<td>quantity</td>";
        print "</tr>";
        
        $i = 0;
        session_start();
        while ($a_row = mysqli_fetch_assoc($result)) {
            print "<tr>\n";
            print "<td>" . $a_row['route_no'] . "</td>";
            print "<td>" . $a_row['from_city'] . "</td>";
            print "<td>" . $a_row['to_city'] . "</td>";
            print "<td>" . $a_row['price'] . "</td>";
            print "<td><input type=\"checkbox\" name=\"checkbox[]\" class=\"searchitem\" value=\"".$i."\" width=\"10\" class=\"quantity\"></td>";
            print "</tr>";  
                if ($i == 0) {
                    $flight = array();
					$_SESSION["tempflights"] = array();
					$flight['route_no']= $a_row['route_no'];
					$flight['from_city']= $a_row['from_city'];
					$flight['to_city']= $a_row['to_city'];
					$flight['price']= $a_row['price'];
					
                     array_push($_SESSION['tempflights'], $flight);
                    $_SESSION["url"] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                }
                else{
					$flight = array();
					$flight['route_no']= $a_row['route_no'];
					$flight['from_city']= $a_row['from_city'];
					$flight['to_city']= $a_row['to_city'];
					$flight['price']= $a_row['price'];
                   array_push($_SESSION["tempflights"], $flight);
                }
            $i++;
            }

        print "<table width=\"30%\"><tr>";
		print "<td><button type=\"button\" onclick=\"gotoSearchPage()\">< New Search</button></td>";
        print "<td>";
        print "<input type=\"submit\" id=\"btnNext\" value=\"Make Booking for selected flight!\" onclick=\"return check_select()\">";
        print "</td>";
        print "</tr>";
		print "</table>";
        print "</form>";
        print "</table>";
	}else{
		print "false3";
	}


}else{
	print "fasle4";
}
mysqli_close($link);

/*
 //Object oriented style
$mysqli = new mysqli('rerun', 'potiro', 'pcXZb(kL', 'poti');

// check connection 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "select * from films where (year>=$made_after and
 year <= $made_before)";

if ($result = $mysqli->query($query)) {

    // fetch object array 
    while ($row = $result->fetch_row()) {
        printf ("%s (%s)\n", $row[0], $row[1]);
    }

    // free result set 
    $result->close();
}

// close connection 
$mysqli->close(); */
?>
<html>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"
            type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		function check_select() {
			if (!$('.searchitem').is(':checked')){
				window.alert('please select at least one flight!');
				return false;
			}
		}
		
		function gotoSearchPage(){
			
			window.open("searchflight.html","_self");
		}
		
		$(document).ready ( function () {
		   
		   
			$('.searchitem').change(function() {
				
				$(".searchitem").attr("checked", false);
				$(this).attr("checked", true);
			});
			
			
		});
	</script>
</html>

