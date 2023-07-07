<html>
<head> 
<title> FINALS ACTIVITY 1 </title>
<style>

	body {
		font-family: Courier;
		text-align: center;
		background-color: #4545;
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

	td {
		border: 2px solid black;
		color: #e8efdb;
	}
	
	h2 {
		font-family: "Verdana";
		color:#800000 ;
		text-align: center;
	}

	h3 {
		font-family: "Verdana";
		color: #5e1914;
		text-align: center;
		font-weight: lighter;
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
		<th> Chapter 3 </th>
	</tr>
	<tr>
		<th> Activity No. </th>
		<th> Finals Activity 1 </th> 
		<th> Date </th>
		<th> 07/05/23 </th>
	</tr>
</table>

<br><br>

<body>

<h2> Set 3 Password </h2>

<div class="login">
	<h3>Sign In</h3>
	
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="username"></label>
			<input type="text" id="username" name="username" placeholder="Your Username" required><br><br>

			<label for="password"></label>
			<input type="text" id="password" name="password" placeholder="Your password" required><br><br>

			<input type="submit" value="Submit">
		</form>
		<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $errors = [];

        // Password must contain a maximum of 8 characters only.
        if (strlen($password) > 8) {
            $errors[] = '<p class="invalid">Password must contain a maximum of 8 characters only.</p>';
        }

        // Special characters are not allowed. Password must contain alphanumeric only.
        if (!ctype_alnum($password)) {
            $errors[] = '<p class="invalid">Special characters are not allowed.</p>';
        }

        // Password must contain an uppercase letter/s.(MAX 2 capital letters)
        if (preg_match_all("/[A-Z]/", $password) > 2) {
            $errors[] = '<p class="invalid">Password must contain at most 2 uppercase letters.</p>';
        }
		
        // Password must contain an uppercase letter/s.(MAX 2 capital letters)
        if (preg_match_all("/[A-Z]/", $password) < 1) {
            $errors[] = '<p class="invalid">Password must contain at most 2 uppercase letters.</p>';
        }

        // The password must not be similar to the username.
        if (stristr($password, $username)) {
            $errors[] = '<p class="invalid">The password must not be similar to the username.</p>';
        }

        if (empty($errors)) {
            echo '<p class="valid">Valid password.</p>';
        } else {
            foreach ($errors as $error) {
                echo "$error";
            }
        }
    }
    ?>
	</div>


</body>

</html>