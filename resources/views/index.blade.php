<h1>Home page success!</h1>
<?php 

$year = date('Y');
$month = date('m');
$day = date('d');
$week = date('l');
$arrayOfMonths = array(
    "January",
    "Febuary","March"
    ,"April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
);

echo "Today is " . $week ."in the year" . $year . " ". $arrayOfMonths[$month] . " " . $day;


?>

