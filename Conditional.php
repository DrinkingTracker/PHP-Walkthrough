<?php
// if-else

$health = 1;
$device = "phone";

if ($health == 100){
    echo "this $device is in perfect condition";
} else if ($health >= 80){
    echo "this $device is fine";
} else if ($health >= 60){
    echo "this $device is slightly - moderately damaged";
} else if ($health >= 35){
    echo "this $device is severely damaged";
} else {
    echo "this $device is completely broken";
}

// switch-case

$day = "sunday";

switch ($day) {
    case "sunday":
        echo "$day is the first day of the week";
        break; // don't forget the break or it will fall through to the next case
    case "monday":
        echo "$day is the start of the work week";
        break;
    case "tuesday":
        echo "$day is the second day";
        break;
    case "wednesday":
        echo "$day is the middle of the week";
        break;
    case "thursday":
        echo "$day is almost the weekend";
        break;
    case "friday":
        echo "$day is the last work day";
        break;
    case "saturday":
        echo "$day is the weekend";
        break;
    default:
        echo "Day did not exist (Check your spelling)";
}

// ternary operator 

// sometimes there is a case that we have to check a condition using if-statemenet. and we give the value for both if-true and if-false condition
// the usage of if-statement on the case like that can be written shorter
// format ->   variable = (condition) ? value-if-true : value-if-false

$UserStatus = 1 ;
$check = ($UserStatus == 1) ? " is online" : " is offline" ;

echo "user" . $check ;

?>