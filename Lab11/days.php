<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>

<?php
$dayNumber = 3; 

switch ($dayNumber) {
    case 1:
        $day = "Monday";
        break;
    case 2:
        $day = "Tuesday";
        break;
    case 3:
        $day = "Wednesday";
        break;
    case 4:
        $day = "Thursday";
        break;
    case 5:
        $day = "Friday";
        break;
    case 6:
        $day = "Saturday";
        break;
    case 7:
        $day = "Sunday";
        break;
    default:
        $day = "Invalid number";
        break;
}


echo "Day of the Week: " . $day;
?>

</body>
</html>
