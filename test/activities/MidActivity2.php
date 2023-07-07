<html>
<head> 
<title> MIDTERM ACTIVITY 2 </title>
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
	
	h3 {
		font-family: "Verdana";
		color:#5E1914 ;
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
		<th> Chapter 2 Functions and Control Structures </th>
	</tr>
	<tr>
		<th> Activity No. </th>
		<th> Activity 2 </th> 
		<th> Date </th>
		<th> 06/19/23 </th>
	</tr>
</table>

<h2> Set A </h2>
<h3> ODD numbers from 1-100 </h3>
<table border = 1>
    <tr>
        <th colspan = 5>Numbers</th>
    </tr>
    <?php
        $count = 0; 
        for ($number  = 3; $number  <= 100; $number ++) {
            if ($number  % 2 != 0) {
                if ($count == 0) {
                    echo "<tr>";
                }
                echo "<th>{$number }</th>";
                $count++;
                if ($count == 5) {
                    echo "</tr>";
                    $count = 0; 
                }
            }
        }

        if ($count != 0) {
            echo "</tr>";
        }
    ?>
</table>

<h3> Fahrenheit to Celsius </h3>
<table border = 1>
    <tr>
        <th>Fahrenheit</th>
        <th>Celsius</th>
    </tr>
    <?php
        for ($fahrenheit = 0; $fahrenheit <= 100; $fahrenheit += 1) {
            $celsius = round(($fahrenheit - 32) * 5 / 9, 2);
            echo "<tr><th>{$fahrenheit}&deg;F</th><th>{$celsius}&deg;C</th></tr>";
        }
    ?>
</table>

<h3> Celsius to Fahrenheit </h3>
<table border = 1>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
		for ($celsius = 0; $celsius <= 100; $celsius += 1) {
            $fahrenheit = ($celsius * 9 / 5) + 32;
            echo "<tr><th>{$celsius}&deg;C</th><th>{$fahrenheit}&deg;F</th></tr>";
        }
    ?>
</table>

</body>
</html>