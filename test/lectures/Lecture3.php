<!Doctype HTML>
<html>
	<head>
		<Title> Lecture 3 - Manipulating Strings </title>
	</head>
	
	<body>
		<?php
			echo "<PHP literal text string</p>";
			$StringVariable = "<p>PHP literal text string</p>";
			echo $StringVariable;
			
			$City = "Paris";
			$Country = "France";
			$Destination = "<p>" . $City . " is in " . $Country . ".</p>";
			echo $Destination;
			
			echo '<p>This code\'s going to work</p>';
			
			$BookTitle = "The Cask of Amontillado";
			echo "<p>The book title '".$BookTitle."' contains " .
			strlen($BookTitle) . " characters.</p>";
			
			$ExampleString = "woodworking project";
			echo substr($ExampleString,4) . "<br />\n";
			echo substr($ExampleString,4,7) . "<br />\n";
			echo substr($ExampleString,0,8) . "<br />\n";
			echo substr($ExampleString,-7) . "<br />\n";
			echo substr($ExampleString,-12,4) . "<br />\n";
			
			
			$Email = "president@whitehouse.gov";
			$NewEmail = str_replace("president", "vice.president", $Email);
			echo $NewEmail; // prints 'vice.president@whitehouse.gov'
			
			
			$Presidents = " George Washington;John Thomas Jefferson;James Madison;James Monroe";
			$President = strtok($Presidents, ";");
			while ($President != NULL) {
				echo "$President<br /><br />";
				$President = strtok(";");
			}
			
			$Presidents = " George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
			$President = strtok($Presidents, "; ");
			while ($President != NULL) {
				echo "$President<br /><br />";
				$President = strtok("; ");
			}
			
			$Presidents = "George Washington;JohnAdams; Thomas Jefferson;James Madison;James Monroe";
			$PresidentArray = explode(";", $Presidents);
			foreach ($PresidentArray as $President) {
				echo "$President<br /><br />";
			}
			
			$PresidentsArray = array("George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe");
			$Presidents = implode(", ", $PresidentsArray);
			echo $Presidents;
			
			$FirstLetter = "A";
			$SecondLetter = "B";
			if ($SecondLetter > $FirstLetter)
				echo "<p>The second letter is higher in the alphabet than the first letter.</p>";
			else
				echo "<p>The second letter is lower in the alphabet than the first letter.</p>";
			
			$FirstName = "Don";
			$SecondName = "Dan";
			echo "<p>The names \"$FirstName\" and \"$SecondName\" have " . similar_text($FirstName, $SecondName) . " characters in common.</p>";
			echo "<p>You must change " . levenshtein($FirstName, $SecondName) . " character(s) to make the names \"$FirstName\" and \"$SecondName\" the same.</p>";

			$FirstName = "Gosselin";
			$SecondName = "Gauselin";
			$FirstNameSoundsLike = metaphone($FirstName);
			$SecondNameSoundsLike = metaphone($SecondName);
			if ($FirstNameSoundsLike == $SecondNameSoundsLike)
				echo "<p>The names are pronounced the same.</p>";
			else
				echo "<p>The names are not pronounced the same.</p>";
			
			$ZIP = "015";
			preg_match("/...../", $ZIP); // returns 0
			$ZIP = "01562";
			preg_match("/...../", $ZIP); // returns 1

			$URL = "http://www.dongosselin.com";
			preg_match("/^http/", $URL); // returns 1
			
			$URL = "http://www.dongosselin.com";
			preg_match("/^http/", $URL); // returns 1;
			$Identifier = "http://www.dongosselin.com";
			preg_match("/com$/", $Identifier); // returns 1
			$Identifier = "http://www.dongosselin.com";
			preg_match("/gov$/", $Identifier);//returns 0
			
			preg_match("/analy[sz]e/", "analyse");//returns 1
			preg_match("/analy[sz]e/", "analyze");//returns 1
			preg_match("/analy[sz]e/", "analyce");//returns 0

			//$LetterGrade variable;
			$LetterGrade = "B";
			echo preg_match("/[A-DF]/", $LetterGrade); // returns true

			$LetterGrade = "A";
			Echo preg_match("/[^EG-Z]/", $LetterGrade); // returns true
		?>
	</body>
</html>