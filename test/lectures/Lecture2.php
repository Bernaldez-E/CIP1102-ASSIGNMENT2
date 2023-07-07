<!Doctype HTML>
<html>
	<head>
		<Title> Lecture 2 - Functions and Control Structures </title>
	</head>
	
	<body>
		<?php
			function
			displayCompanyName($CompanyName) {
				echo "<p>$CompanyName</p>";
			}
			displayCompanyName("Course Technology");
			
			function averageNumbers($a, $b, $c) {
				$SumOfNumbers = $a + $b + $c;
				$Result = $SumOfNumbers / 3;
				return $Result;
			}
		?>
		
		
		<?php
			$GlobalVariable = "Global variable";
			function scopeExample() {
				global $GlobalVariable;
				echo "<p>$GlobalVariable</p>";
			}
			scopeExample();
			
			$ExampleVar = 5;
			if ($ExampleVar == 5) { // condition evaluates to 'TRUE'
				echo " <p>The condition evaluates to true.</p> ";
				echo '<p>$ExampleVar is equal to ',
				" $ExampleVar.</p> ";
				echo " <p>Each of these lines will be printed.</p> ";
			}
			echo " <p>This statement always executes after the if
			statement.</p> ";
		?>
		
		<?php
			//if..else statements
			$Today = " Wednesday ";
			if ($Today == " Monday ")
				echo " <p>Today is Monday</p> ";
			else
				echo " <p>Today is not Monday</p> ";

		
			//Nested if..else statements
			$SalesTotal = 70;
			if ($SalesTotal >= 50){
				if ($SalesTotal <= 100){
					echo " <p>The sales total is between 50 and 100, inclusive.</p> ";
				}
			}
			
			//SWITCH statements
			switch ($Today) {
				case "Monday":
					echo " <p>Today is Monday</p> ";
					break;
				case "Tuesday":
					echo " <p>Today is Tuesday</p> ";
					break;
				default:
					echo " <p>Today is not Monday nor Tuesday</p> ";
					break;
			}
		?>
		
		<?php
			//loop structures
			
			//while loop
			$Count = 1;
			while ($Count <= 5) {
				echo " $Count<br /> ";
				++$Count;
			}
			echo " <p>You have printed 5 numbers.</p> ";
			
			//do...while loop
			$Count = 2;
			do {
				echo " <p>The count is equal to $Count</p> ";
				++$Count;
			} while ($Count < 2);
			
			//for loop
			$FastFoods = array(" pizza", " burgers ", " french fries ", " tacos ", " fried chicken ");
			for ($Count = 0; $Count < 5; ++$Count) {
				echo $FastFoods[$Count], " <br /> ";
			}
			
			//foreach statement
			$DaysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
			foreach ($DaysOfWeek as $Day) {
				echo "<p>$Day</p>";
			}
			
			$DaysofWeek = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
			foreach ($DaysOfWeek as $DayNumber => $Day) {
				echo "<p>Day ".$DayNumber." is $Day</p>";
			}

		?>
	</body>
</html>