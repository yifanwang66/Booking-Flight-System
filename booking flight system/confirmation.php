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
            window.location = '';
        }
    </script>
</head>
<body>
<form action="index.php" method="get" name='frm'>
<tr>
        <td>
                <input type='hidden' name="showwwnotice" value="100">
                <input type="submit" value="Book more Flights">
        </td>
</tr>
</form>
<form action="index.php" method="get" name='frm'>
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