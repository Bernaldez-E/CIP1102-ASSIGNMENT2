<html>
<head> 
<title> MIDTERM ACTIVITY 1 </title>
<style>

	body {
		font-family: Courier;
		font-weight: bold;
		text-align: center;
		color: #7C0902;
		font-size: 60px;
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
		<th> Chapter 2 Functions and Control Structures </th>
	</tr>
	<tr>
		<th> Quiz No. </th>
		<th> Hands-on Quiz 1 </th> 
		<th> Date </th>
		<th> 06/29/23 </th>
	</tr>
</table>

<br><br>

<body>

<?php
$size = 7; 
$output = '';

for ($i = $size; $i >= 1; $i -= 2) {
    $output .= str_repeat(' ', ($size - $i) / 2);

    $output .= str_repeat('*', $i);

    $output .= "\n";
}

for ($i = 3; $i <= $size; $i += 2) {
    $output .= str_repeat(' ', ($size - $i) / 2);

    $output .= str_repeat('*', $i);

    $output .= "\n";
}

echo nl2br($output);
?>

</body>

</html>