<!Doctype HTML>
<html>
	<head>
		<Title> Lecture 5 - Manipulating Arrays </title>
	</head>
	
	<body>
		<h2>Lecture No: 5 <br>Topic: Handling User Input</h2>
		<?php
			$TopSellers = array(
			"Chevrolet Impala",
			"Chevrolet Malibu",
			"Chevrolet Silverado",
			"Ford F-Series",
			"Toyota Camry",
			"Toyota Corolla",
			"Nissan Altima",
			"Honda Accord",
			"Honda Civic",
			"Dodge Ram");
			array_shift($TopSellers);
			array_unshift($TopSellers, "Honda CR-V");
			echo "<pre>\n";
			print_r($TopSellers);
			echo "</pre>\n";
			
			$HospitalDepts = array(
			"Anesthesia",
			"Molecular Biology",
			"Neurology",
			"Pediatrics");
			array_pop($HospitalDepts); // Removes "Pediatrics"
			array_push($HospitalDepts, "Psychiatry", "Pulmonary Diseases");
			
			$HospitalDepts = array(
			"Anesthesia", // first element (0)
			"Molecular Biology", // second element (1)
			"Neurology", // third element (2)
			"Pediatrics"); // fourth element (3)
			
$HospitalDepts = array(
"Anesthesia", // first element (0)
"Molecular Biology", // second element (1)
"Neurology", // third element (2)
"Pediatrics"); // fourth element (3)

$HospitalDepts = array(
"Anesthesia", // first element (0)
"Molecular Biology", // second element (1)
"Neurology", // third element (2)
"Pediatrics"); // fourth element (3)

$TopSellers = array(
"Ford F-Series", "Chevrolet Silverado", "Toyota Camry",
"Honda Accord", "Toyota Corolla", "Ford F-Series", "Honda Civic",
"Honda CR-V", "Honda Accord", "Nissan Altima", "Toyota Camry",
"Chevrolet Impala", "Dodge Ram", "Honda CR-V");
echo "<p>The 2008 top selling vehicles are:</p><p>";
$TopSellers = array_unique($TopSellers);
$TopSellers = array_values($TopSellers);
for ($i=0; $i<count($TopSellers); ++$i) {
echo "{$TopSellers[$i]}<br />";
}
echo "</p>";

$TopSellers = array("Ford F-Series", "Chevrolet Silverado", "Toyota Camry", "Honda Accord", "Toyota
Corolla", "Honda Civic", "Nissan Altima", "Chevrolet Impala", "Dodge Ram", "Honda CR-V");
$FiveTopSellers = array_slice($TopSellers, 0, 5);
echo "<p>The five best-selling vehicles for 2008 are:</p>\n";
for ($i=0; $i<count($FiveTopSellers); ++$i) {
echo "{$FiveTopSellers[$i]}<br />\n";
}

$Provinces = array("Newfoundland and Labrador", "Prince Edward Island", "Nova Scotia", "New
Brunswick", "Quebec", "Ontario", "Manitoba", "Saskatchewan", "Alberta", "British Columbia");
$Territories = array("Nunavut", "Northwest Territories", "Yukon Territory");
$Canada = $Provinces + $Territories;
echo "<pre>\n";
print_r($Canada);
echo "</pre>\n";

$ProvincialCapitals = array("Newfoundland and Labrador"=>"St. John's", "Prince Edward
Island"=>"Charlottetown", "Nova Scotia"=>"Halifax", "New Brunswick"=>"Fredericton",
"Quebec"=>"Quebec City", "Ontario"=>"Toronto", "Manitoba"=>"Winnipeg", "Saskatchewan"=>"Regina",
"Alberta"=>"Edmonton", "British
Columbia"=>"Victoria");
$TerritorialCapitals =
array("Nunavut"=>"Iqaluit", "Northwest
Territories"=>"Yellowknife", "Yukon
Territory"=>"Whitehorse");
$CanadianCapitals = $ProvincialCapitals +
$TerritorialCapitals;
echo "<pre>\n";
print_r($CanadianCapitals);
echo "</pre>\n";
$Provinces = array("Newfoundland and Labrador", "Prince Edward Island", "Nova Scotia", "New
Brunswick", "Quebec", "Ontario", "Manitoba", "Saskatchewan", "Alberta", "British Columbia");
$Territories = array("Nunavut", "Northwest Territories", "Yukon Territory");
$Canada = array_merge($Provinces, $Territories);
		?>

	</body>
</html>