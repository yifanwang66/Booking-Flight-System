<?php

session_start();


$_SESSION['flight_array_id'] = $_POST['checkbox'][0];



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Seats</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">   </script>
    <script type="text/javascript">
        function check_select(){

            if (!$('.1A').is(':checked')&&!$('.2A').is(':checked')&&!$('.3A').is(':checked')
                &&!$('.4A').is(':checked')&&!$('.5A').is(':checked')){
                window.alert('please select at least one seat!');
                return false;
            }

            if (($('.1AE').is(':checked')&&!$('.1A').is(':checked'))||
                ($('.2AE').is(':checked')&&!$('.2A').is(':checked'))||
                ($('.3AE').is(':checked')&&!$('.3A').is(':checked'))||
                ($('.4AE').is(':checked')&&!$('.4A').is(':checked'))||
                ($('.5AE').is(':checked')&&!$('.5A').is(':checked'))){
                window.alert('please select the seat before selecting the service!');

                return false;
            }
			
			
			window.open("confirmation.php","_self");
            return true;

        }
		
		

    </script>
</head>
<body>

<table class="mytable">
    <div>
    <form method="post" onsubmit="return check_select()" action="seatbookingsession.php">
        <tr>
        <td colspan="8" align="center">Seats Selection</td>
        </tr>
        <tr class="noborder">
            <td>1A</td>
            <td><input type="checkbox" class="1A" name="seat[0][]" value="1A" width="10"></td>
            <td>Child</td>
            <td><input type="checkbox" class="1AE" name="seat[0][]" value="Child" width="10"></td>
            <td>Wheelchair</td>
            <td><input type="checkbox" class="1AE" name="seat[0][]" value="Wheelchair" width="10"></td>
            <td>Special Diet</td>
            <td><input type="checkbox" class="1AE" name="seat[0][]" value="Special Diet" width="10"></td>
        </tr>
        <tr class="noborder">
            <td>2A</td>
            <td><input type="checkbox" class="2A" name="seat[1][]" value="2A" width="10"></td>
            <td>Child</td>
            <td><input type="checkbox" class="2AE" name="seat[1][]" value="Child" width="10"></td>
            <td>Wheelchair</td>
            <td><input type="checkbox" class="2AE" name="seat[1][]" value="Wheelchair" width="10"></td>
            <td>Special Diet</td>
            <td><input type="checkbox" class="2AE" name="seat[1][]" value="Special Diet" width="10"></td>
        </tr >
        <tr class="noborder">
            <td>3A</td>
            <td><input type="checkbox" class="3A" name="seat[2][]" value="3A" width="10"></td>
            <td>Child</td>
            <td><input type="checkbox" class="3AE" name="seat[2][]" value="Child" width="10"></td>
            <td>Wheelchair</td>
            <td><input type="checkbox" class="3AE" name="seat[2][]" value="Wheelchair" width="10"></td>
            <td>Special Diet</td>
            <td><input type="checkbox" class="3AE" name="seat[2][]" value="Special Diet" width="10"></td>
        </tr>
        <tr class="noborder">
            <td>4A</td>
            <td><input type="checkbox" class="4A" name="seat[3][]" value="4A" width="10"></td>
            <td>Child</td>
            <td><input type="checkbox" class="4AE" name="seat[3][]" value="Child" width="10"></td>
            <td>Wheelchair</td>
            <td><input type="checkbox" class="4AE" name="seat[3][]" value="Wheelchair" width="10"></td>
            <td>Special Diet</td>
            <td><input type="checkbox" class="4AE" name="seat[3][]" value="Special Diet" width="10"></td>
        </tr>
        <tr class="noborder">
            <td>5A</td>
            <td><input type="checkbox" class="5A" name="seat[4][]" value="5A" width="10"></td>
            <td>Child</td>
            <td><input type="checkbox" class="5AE" name="seat[4][]" value="Child" width="10"></td>
            <td>Wheelchair</td>
            <td><input type="checkbox" class="5AE" name="seat[4][]" value="Wheelchair" width="10"></td>
            <td>Special Diet</td>
            <td><input type="checkbox" class="5AE" name="seat[4][]" value="Special Diet" width="10"></td>
        </tr>
        <tr class="noborder">
            <td id="num" colspan="4">Seat Selected: 0</td>
            <td colspan="4" align="center">
                <input type="submit" class="submit" value="Add to Bookings">
            </td>
        </tr>
    </form>
    </div>
</table>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">   </script>
<script type="text/javascript">
$(document).ready ( function () {
    $('.1A').click(function () {
        var i = 0;
        if ($('.1A').is(':checked')){
            i++;
        }
        if ($('.2A').is(':checked')){
            i++;
        }
        if ($('.3A').is(':checked')){
            i++;
        }
        if ($('.4A').is(':checked')){
            i++;
        }
        if ($('.5A').is(':checked')){
            i++;
        }
		
		if(!$('.1A').is(':checked')){
			$('.1AE').attr("checked", false);
			
		}
        $('#num').html("Seat Selected:");
        $('#num').append(i);
    });
    $('.2A').click(function () {
        var i = 0;
        if ($('.1A').is(':checked')){
            i++;
        }
        if ($('.2A').is(':checked')){
            i++;
        }
        if ($('.3A').is(':checked')){
            i++;
        }
        if ($('.4A').is(':checked')){
            i++;
        }
        if ($('.5A').is(':checked')){
            i++;
        }
		
		if(!$('.2A').is(':checked')){
			$('.2AE').attr("checked", false);
			
		}
        $('#num').html("Seat Selected:");
        $('#num').append(i);
    });
    $('.3A').click(function () {
        var i = 0;
        if ($('.1A').is(':checked')){
            i++;
        }
        if ($('.2A').is(':checked')){
            i++;
        }
        if ($('.3A').is(':checked')){
            i++;
        }
        if ($('.4A').is(':checked')){
            i++;
        }
        if ($('.5A').is(':checked')){
            i++;
        }
		if(!$('.3A').is(':checked')){
			$('.3AE').attr("checked", false);
			
		}
        $('#num').html("Seat Selected:");
        $('#num').append(i);
    });
    $('.4A').click(function () {
        var i = 0;
        if ($('.1A').is(':checked')){
            i++;
        }
        if ($('.2A').is(':checked')){
            i++;
        }
        if ($('.3A').is(':checked')){
            i++;
        }
        if ($('.4A').is(':checked')){
            i++;
        }
        if ($('.5A').is(':checked')){
            i++;
        }
		if(!$('.4A').is(':checked')){
			$('.4AE').attr("checked", false);
			
		}
        $('#num').html("Seat Selected:");
        $('#num').append(i);
    });
    $('.5A').click(function () {
        var i = 0;
        if ($('.1A').is(':checked')){
            i++;
        }
        if ($('.2A').is(':checked')){
            i++;
        }
        if ($('.3A').is(':checked')){
            i++;
        }
        if ($('.4A').is(':checked')){
            i++;
        }
        if ($('.5A').is(':checked')){
            i++;
        }
		if(!$('.5A').is(':checked')){
			$('.5AE').attr("checked", false);
			
		}
        $('#num').html("Seat Selected:");
        $('#num').append(i);
    });
	
	$('.1AE').click(function() {
		
		if($('.1AE').is(':checked')) {
			$('.1A').attr("checked", true);
		}
		
	});
	$('.2AE').click(function() {
		
		if($('.2AE').is(':checked')) {
			$('.2A').attr("checked", true);
		}
		
	});
	$('.3AE').click(function() {
		
		if($('.3AE').is(':checked')) {
			$('.3A').attr("checked", true);
		}
		
	});
	$('.4AE').click(function() {
		
		if($('.4AE').is(':checked')) {
			$('.4A').attr("checked", true);
		}
		
	});
	$('.5AE').click(function() {
		
		if($('.5AE').is(':checked')) {
			$('.5A').attr("checked", true);
		}
		
	});
	
});
	
</script>