 <!--que-2 Write a PHP program to check Leap years between 1901 to 2016 Using
nested if.  -->

<?php 
$year = 2016;
if ($year % 400 == 0) {
   echo $year." is a leap year.";
} elseif ($year % 100 == 0) {
   echo $year." is not a leap year.";
} elseif ($year % 4 == 0) {
   echo $year." is a leap year.";
} else {
   echo $year." is not a leap year.";
}
?>

<!-- output -->
<!-- 2016 is a leap year. -->