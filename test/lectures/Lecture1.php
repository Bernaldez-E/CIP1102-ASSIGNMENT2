<!DOCTYPE HTML>
<html>
	<head>
		<title> Lecture 1 </title>
		
	</head>
	
	<body>
		<h1>Multiple Script Sections</h1>
		<h2>First Script Section</h2>
		<?php echo "<p>Output from the first script section.</p>";
		?>
		<h2>Second Script Section</h2>
		<?php echo "<p>Output from the second script
		section.</p>";?>
		
		<?php
		echo '<p>Explore <strong>Africa</strong>, <br />';
		Echo "<strong>South America</strong>, <br />";
		ECHO " and <strong>Australia</strong>!</p>";
		?>
		
		
		<?php
		/*
		This line is part of the block comment.
		This line is also part of the block comment.
		*/
		echo "<h1>Comments Example</h1>"; // Line comments can follow
		echo 'code statements'
		// This line comment takes up an entire line.
		# This is another way of creating a line comment.
		/* This is another way of creating
		a block comment. */
		?>
		<br><br>
		
		<?php
			$VotingAge = 18;
			echo $VotingAge;
			echo '<p>The legal voting age is ', $VotingAge, '.</p>';
		?>
		
		<?php
			define("PI", 3.14159);
			echo "<p>The pi is equivalent to ",PI,"</p>";
		?>
		
		<?php
			$Provinces = array
			(
				"Newfoundland and Labrador",
				"Prince Edward Island",
				"Nova Scotia",
				"New Brunswick",
				"Quebec",
				"Ontario",
				"Manitoba",
				"Saskatchewan",
				"Alberta",
				"British Columbia"
			);
			
			$Territories = array("Nunavut", "Northwest Territories", "Yukon
			Territory");
			
			echo "The third element in provinces is ",$Provinces[2],".";
			
			echo "<br><br>";
			
			ECHO "There are ", count($Provinces), " provinces and ", count($Territories)," Territories."
		?>
		
		<br>
		
		<?php
			$DivisionResult = 15 / 6;
			$ModulusResult = 15 % 6;
			
			echo "<p>15 divided by 6 is $DivisionResult.</p>"; //prints '2.5'

			echo "The whole number 6 goes into 15 twice, with a remainder of $ModulusResult.</p>"; // prints '3'
		?>
		
		<?php
			$MyFavoriteSuperHero = "Superman";
			$MyFavoriteSuperHero = "Batman";
			
			echo "$MyFavoriteSuperHero";
		?>
		
		<?php
			$BlackjackPlayer1 = 20;
			
			($BlackjackPlayer1 <= 21) ? $Result =
				"Player 1 is still in the game. " : $Result = "Player 1 is out of the action.";

				echo "<p>", $Result, "</p>";
		?>
	</body>
</html>