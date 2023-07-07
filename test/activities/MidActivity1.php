<html>
<head> 
<title> MIDTERM ACTIVITY 1 </title>
<style>

	body {
		font-family: Courier;
	}
	table{
		width: 75%;
		border-collapse: collapse;

		
	}
	
	th {
		border: 2px solid black;
	}
	
	h2 {
		font-family: "Verdana";
		color:#800000 ;
	}
	
	p {
		font-weight: bold;
	}
	

</style>
</head>

<body>

<table border = 1>
	<tr>
		<th> Name: </th>
		<th> Bernaldez, Erickson B. </th>
		<th> Topic: </th>
		<th> Chapter 1 Introduction to PHP </th>
	</tr>
	<tr>
		<th> Activity No. </th>
		<th> Activity 1 </th> 
		<th> Date </th>
		<th> 06/17/23 </th>
	</tr>
</table>

<h2> Problem 1 </h2>

<?php

$DaysFrench = array ("Dimanche", "Lundi", " Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$DaysEnglish = array ("Sunday","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<p> The days of the week in English are:  $DaysEnglish[0], $DaysEnglish[1], $DaysEnglish[2],
$DaysEnglish[3], $DaysEnglish[4], $DaysEnglish[5], $DaysEnglish[6]. </p>";

echo "<p> The days of the week in French are:</b>  $DaysFrench[0], $DaysFrench[1], $DaysFrench[2],
$DaysFrench[3], $DaysFrench[4], $DaysFrench[5], $DaysFrench[6]. </p>";

?>

<h2> Problem 2 </h2>

<?php

define("FractionNumber", 32.9841);
echo "<p> The original number is: </p>", FractionNumber;
echo "<p> The rounded number is: </p>", round(FractionNumber);
echo "<p> The ceiling number is: </p>", ceil(FractionNumber);
echo "<p> The floor number is: </p>", floor(FractionNumber);
 
?>

<h2> Problem 3 </h2>

<?php
$Number = 27;

if (is_numeric($Number)){
		(round($Number) % 2 == 0) ? $Result = "Number is <b>Even</b>.": $Result = "Number is Odd.";
		 echo "Given Number is $Number ";
		 echo "$Result";
}

else {
	echo "<p> The Given Value is INVALID, Please enter a Numeric Value. </p>";
}
?>