<!DOCTYPE html>
<html>
<body>
    <form action="" method="POST">
        <label>1-Monday , 2-Tuesday, 3-Wednesday...7-Sunday</label><br><br>
        <label>Enter a number to display corresponding week day</label>
        <input type="number" value="" name="num"><br>
        <input type="submit">
    </form>
    <?php
        switch($_POST['num'])
        {
            case '1' :echo "MONDAY";break;
            case '2' :echo "TUESDAY";
            case '3':echo "WEDNESDAY";break;
            case '4':echo "THURSDAY";break;
            case '5':echo "FRIDAY";break;
            case '6':echo "SATURDAY";
            case '7':echo "SUNDAY";break;
            default:echo "INVALID";break;
        }
    ?> 
</body>
</html>
