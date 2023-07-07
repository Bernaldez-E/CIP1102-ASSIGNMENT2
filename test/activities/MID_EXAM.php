<html>
<head> 
<title> MIDTERM ACTIVITY 1 </title>
<style>

	body {
		font-family: Courier;
		font-weight: bold;
		text-align: center;
		color: #7C0902;
		font-size: 20px;
	}
	table{
		width: 50%;
		border-collapse: collapse;
		margin-left: 25%;
		margin-right: 25%;
	}
	
	th {
		border: 2px solid black;
		color: black;
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



<table border = 1>
	<tr>
		<th> Name: </th>
		<th> Bernaldez, Erickson B. </th>
		<th> Topic: </th>
		<th> Chapter 1-2 </th>
	</tr>
	<tr>
		<th> EXAM </th>
		<th> Midterm Examination </th> 
		<th> Date </th>
		<th> 06/30/23 </th>
	</tr>
</table>

<br><br>

<body>

<h2> Problem 1 </h2>

<br><br>

<?php 
    $userinput = "Erickson1234";
    $uppercase = preg_match('@[A-Z]@', $userinput);
    $lowercase = preg_match('@[a-z]@', $userinput);
    $vowelcount = preg_match_all("/[aeiou]/", $userinput);
    $uppervowelcount = preg_match_all("/[AEIOU]/", $userinput);
    $number = preg_match('@[0-9]@', $userinput);
    $length = strlen($userinput);
    $specialcharacters = preg_match('@[^\w]@', $userinput);
        
    if ($length > 12) {
        echo "<p>Validation: Invalid input. Input should have a maximum of 12 characters</p>";
    }
    else if ($specialcharacters) {
        echo "<p>Validation: Invalid input. Input should have numbers and letters only.</p>";
    } 
    else {
        $numberCount = 0;
        $letterCount = 0;
            
        for ($counter = 0; $counter < $length; $counter++) {
            if($userinput[$counter] >= 'a' && $userinput[$counter] <= 'z' || $userinput[$counter] >= 'A' && $userinput[$counter] <= 'Z') {
                $letterCount++;
            }
            else{
                $numberCount++;
            }
        }   
        echo "<p>The string input is: " .$userinput. "</p>";
        echo "<p>There is a total of " .$letterCount. " letters and " .$numberCount.  " numbers</p>";
    }
?>

<br><br>

<h2> Problem 2 </h2>

<br><br>

<?php
$Numbers = 177013;
$vowelcount = preg_match_all("/[aeiou]/", $Numbers);
$uppervowelcount = preg_match_all("/[AEIOU]/", $Numbers);
$number = preg_match('@[0-9]@', $Numbers);
$length = strlen($Numbers);
$specialcharacters = preg_match('@[^\w]@', $Numbers);
$uppercase = preg_match('@[A-Z]@', $Numbers);
$lowercase = preg_match('@[a-z]@', $Numbers);
if ($length > 7) {
    echo "<p>The maximum number of characters for the longest numbers that may be entered is seven.</p>";
}
else if ($uppercase || $lowercase || $specialcharacters) {
    echo "<p>You should only input numbers.</p>";
} 
else {
    if ($length == 1) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Ones</p>";
    }
    else if ($length == 2) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Ten</p>";
    }
    else if ($length == 3) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Hundreds</p>";
    }
    else if ($length == 4) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Thousands</p>";
    }
    else if ($length == 5) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Ten Thousand</p>";
    }
    else if ($length == 6) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Hundred Thousand</p>";
    }
    else if ($length == 7) {
        echo "<p>The number of the input is: " .$Numbers. "</p>";
        echo "<p>The place value of the number is Millions</p>";
    }
    else {
        echo "<p>OUTPUT: Not Available</p>";
    }
}

?>

</body>


</html>

