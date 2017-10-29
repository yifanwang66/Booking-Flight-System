<!D0CTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title>Complete Booking - Stage 2 of 4 - Payment Details</title>
</head>
<body>
<table>
    <tr><td>Complete Booking - Stage 2 of 4 - Payment Details</td></tr>
        <tr>
            <td>
            <?php
            session_start();
           $_SESSION['fname'] = $_POST['fname'];
            echo "First name:";
            echo $_SESSION['fname'];
            ?>
            </td>
        </tr>
    <tr>
        <td>
            <?php
            session_start();
            echo "Last name:";
            $_SESSION['lname'] = $_POST['lname'];
            echo $_POST['lname'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            session_start();
            echo "Address line 1:";
            $_SESSION['address1'] = $_POST['address1'];
            echo $_POST['address1'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            session_start();
            echo "Address line 2:";
            $_SESSION['address2'] = $_POST['address2'];
            echo $_POST['address2'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            session_start();
            echo "Suburb:";
            $_SESSION['suburb'] = $_POST['suburb'];
            echo $_POST['suburb'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "State:";
            $_SESSION['state'] = $_POST['state'];
            echo $_POST['state'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "Country:";
            $_SESSION['country'] = $_POST['country'];
            echo $_POST['country'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "Post code:";
            $_SESSION['pcode'] = $_POST['pcode'];
            echo $_POST['pcode'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "Email:";
            $_SESSION['email'] = $_POST['email'];
            echo $_SESSION['email'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "Mobile:";
            $_SESSION['mobile'] = $_POST['mobile'];
            
            echo $_POST['mobile'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "Business Phone:";
            $_SESSION['business'] = $_POST['business'];
            echo $_POST['business'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "Work Phone:";
            $_SESSION['work'] = $_POST['work'];
            echo $_POST['work'];
            ?>
        </td>
    </tr>
</table>
<form name="form1" action="paymentconfirmation.php" method="POST" onsubmit="return validate()">
    <table width="90%" border="0">
        <tr>
            <td>Credit Card type<span style="color:#F00">* </span></td>
            <td><select name="country">
                    <option value="" selected="selected">- please select -</option>
                    <option value="Visa">Visa</option>
                    <option value="Diners">Diners</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="Amex">Amex</option>
                </select></td>
        </tr>
        <tr>
            <td>Credit Card Number<span style="color:#F00">* </span></td>
            <td><input type="text" name="number" id="number" size="50" /></td>
        </tr>
        <tr>
            <td>Name on Credit Card<span style="color:#F00">* </span></td>
            <td><input type="text" name="name" id="name" size="50" /></td>
        </tr>
        <tr>
            <td>Expiry month date<span style="color:#F00">* </span></td>
            <td><input type="text" name="emd" id="emd" size="50" /></td>
        </tr>
        <tr>
            <td>expiry year date<span style="color:#F00">* </span></td>
            <td><input type="text" name="eyd" id="eyd" size="50" /></td>
        </tr>
        <tr>
            <td>security code<span style="color:#F00">* </span></td>
            <td><input type="text" name="code" id="code" size="50" /></td>
        </tr>
    </table>
    <center>
        <input type="submit" value="Purchase"/>
    </center>
</form>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">   </script>
<script type="text/javascript">
    function validate()
    {
        var error = true;
        $("input").css("background-color","White");
        var cardnumregex = new RegExp(/^\d+$/);
        var emdregex = new RegExp(/^(0?[1-9]|1[012])$/);
        var eydregex = new RegExp(/(?!^\d+$)^.+$/);

        if ($('#number').val().length < 12 || !cardnumregex.exec($('#number').val()))
        {
            error_type = 1;
            $('#number').focus();
            $('#number').css("background-color","Red");
            error = false;
        }
        if ($("#name").val() == "")
        {
            error_type = 1;
            $("#name").focus();
            $("#name").css("background-color","Red");
            error = false;
        }
        if ($("#emd").val() == "" || !emdregex.exec($("#emd").val()))
        {
            error_type = 1;
//                $("#address1").val().focus();
            $("#emd").css("background-color","Red");
            error = false;
        }
        if ($("#eyd").val() < 2016 || eydregex.exec($("#eyd").val()))
        {
            error_type = 1;
//                $("#address1").val().focus();
            $("#eyd").css("background-color","Red");
            error = false;
        }

        if ( $("#code").val() == "" || eydregex.exec($("#code").val()))
        {
            error_type = 1;
//                $("#email").focus();
            $("#code").css("background-color","Red");
            error = false;
        }
        if ($("#eyd").val() == 2016 && $("#emd").val()<5){
            error_type = 1;
//                $("#address1").val().focus();
            $("#eyd").css("background-color","Red");
            $("#emd").css("background-color","Red");

            error = false;
        }
        if ( error ==false)
        {
            switch (error_type)
            {
                case 1: alert("Please enter valid value!!!");
                    break;
                case 2: alert("please enter a valid value");
                    break;
            }
            return false;
        }

        else
        {
            return true;
        }

    }
    $(document).ready(function()
    {
        $("#number").attr('maxlength','12');
        $("#code").attr('maxlength','3');
        $("#emd").attr('maxlength','2');
    });
</script>