<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["new-username"];
    $password = $_POST["new-password"];
    $confirmPassword = $_POST["confirm-password"];
    
    $errors = array();

    if (empty($username)) {
        $errors[] = "Username is required";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if (empty($confirmPassword)) {
        $errors[] = "Confirm Password is required";
    }

    // Check if the passwords match
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }

    // If there are no errors, proceed with account creation
    if (empty($errors)) {
        
        header("Location: create_account_success.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<style>
	body {
		display: flex;
		flex-direction: column;
		min-height: 100vh;
	}

	.container {
		flex: 1;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: center;
	}

	form button[type="submit"] {
		margin-top: 20px;
	}
    .container p {
        margin-bottom: 20px;
    }
        
    .container a {
        color: #333;
        text-decoration: none;
     }
    </style>
</head>
<body>
<header>
    <h1>Welcome to Geek Squad</h1>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="subscription.html">Subscription</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="download.html">Download</a></li>
            <li><a href="login.html">Login</a></li>
		</ul>
		<ul>
            <li class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lectures</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="lectures/Lecture1.php">Lecture 1</a>
                    <a class="dropdown-item" href="lectures/Lecture2.php">Lecture 2</a>
                    <a class="dropdown-item" href="lectures/Lecture3.php">Lecture 3</a>
                    <a class="dropdown-item" href="lectures/Lecture4.php">Lecture 4</a>
                    <a class="dropdown-item" href="lectures/Lecture5.php">Lecture 5</a>
                    <a class="dropdown-item" href="#">Lecture 6</a>
                </div>
            </li>
            <li class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activities</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="activities/MidActivity1.php">Midterm Act 1</a>
                    <a class="dropdown-item" href="activities/MidActivity2.php">Midterm Act 2</a>
                    <a class="dropdown-item" href="activities/MidActivity3.php">Midterm Act 3</a>
                    <a class="dropdown-item" href="activities/MID_Q1H-1.php">Midterm Quiz 2</a>
                    <a class="dropdown-item" href="activities/MID_EXAM.php">Midterm Exam</a>
                    <a class="dropdown-item" href="activities/FinActivity1-BERNALDEZ.php">Finals Act 1</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
    
    <section id="create-account">
        <div class="container">
            <h2>Create Account</h2>
            
            <?php if (!empty($errors)): ?>
                <div class="error-message">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="new-username">Username:</label>
                <input type="text" id="new-username" name="new-username" required>
				<br><br>
                <label for="new-password">Password:</label>
                <input type="password" id="new-password" name="new-password" required>
				<br><br>
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
				<br><br>
                <button type="submit">Create Account</button>
            </form>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2023 Geek Squad Technology Website. All rights reserved.</p>
    </footer>
</body>
</html>