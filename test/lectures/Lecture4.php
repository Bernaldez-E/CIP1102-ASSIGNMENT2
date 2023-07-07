<!Doctype HTML>
<html>
	<head>
		<Title> Lecture 4 - Handling User Input </title>
	</head>
	
	<body>
		<h2>Lecture No: 4 <br>Topic: Handling User Input</h2>
		<p>
		<ul>
			<li>Autoglobals are predefined global arrays that provide information about server, environment, and user input</li>
			<li>Autoglobals are associative arrays
– To access the values in an associative array, place the element’s key in single or double
quotation marks inside the array brackets.<br>
(the following example displays the SCRIPT_NAME element of the $_SERVER autoglobal)
$_SERVER["SCRIPT_NAME"];//displays the path and name of the current script</li>
		</ul>
		</p>
		
		<h2>Building HTML Web Forms</h2>
		<p>
		Web forms are interactive controls that allow users to enter and submit data to a processing script<br><br>
• A Web form is a standard HTML form with two required attributes in the opening form tag:
<br><br>
– Action attribute: Identifies the program on the Web server that will process the form
data when it is submitted<br>
– Method attribute: Specifies how the form data will be sent to the processing script
		</p>
		
<h2>Adding an action Attribute</h2>
<p>
<br>
• The opening form tag requires an action attribute
<br>
• The value of the action attribute identifies the program on the Web server that will process the
form data when the form is submitted<br><br>
form action="http://www.example.com/HandleFormInput.php"
</p>

<h2>Adding the method Attribute</h2>
<br>
• The value of the method attribute must be either “post” or “get”<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The “post” method embeds the form data in the request message<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The “get” method appends the form data to the URL specified in the form’s action
attribute<br>
• When a Web form is submitted using the “post” method, PHP automatically creates and
populates a $_POST array; when the “get” method is used, PHP creates and populates a $_GET
array<br>
• Form fields are sent to the Web server as a name/value pair<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The name portion of the name/value pair becomes the key of an element in the $_POST
or $_GET array, depending on which method was used to submit the data<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The value portion of the name/value pair is populated by the data that the user enters
in the input control on the Web form<br>
• When submitting data using the “get” method, form data is appended to the URL specified by
the action attribute<br>
• Name/value pairs appended to the URL are called URL tokens<br>
• The form data is separated from the URL by a question mark (?)<br>
• the individual elements are separated by an ampersand (&)<br>
• the element name is separated from the value by an equal sign (=).<br>
• Spaces in the name and value fields are encoded as plus signs (+)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– all other characters except letters, numbers, hyphens (-), underscores (_) and periods (.)
are encoded using a percent sign (%) followed by the two-digit hexadecimal
representation of the character’s ASCII value<br>
• (the following code shows three form elements submitted to the
process_Scholarship.php script)<br>
http://www.example.net/process_Scholarship.php?fName=John&lName=Smith&Submit=Send+Form
• Limitations of the “get” method for submitting form data<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Restricts the number of characters that can be appended to a single variable to 100<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The form values are appended to the URL in plain text, making a URL request insecure<br>
• Advantage of the “get” method for submitting form data<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Passed values are visible in the Address Bar of the browser<br>

<h2>Processing Form Data</h2>
• A form handler is a program or script that processes the information submitted from a Web
form<br>
• A form handler performs the following:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Verifies that the user entered the minimum amount of data to process the form<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Validates form data<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Works with the submitted data<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Returns appropriate output as a Web page<br>

<h2>Retrieving Submitted Data</h2>
• The PHP script that processes the user-submitted data is called a form handler.<br>
• The values stored in the $_POST array can be accessed and displayed by the echo statement as
shown below:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$firstName = $_POST['fName'];<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$lastName = $_POST['lName'];<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Thank you for filling out the scholarship form, ".$firstName." ".$lastName . ".";<br><br>

<h2>Handling Special Characters</h2>
• The addslashes() function adds a backslash before a single or double quote or a NULL character
in user input (if magic quotes is disabled, this is the alternative to escape a character before
saving to a text file or database)<br><br>
• The stripslashes() function removes a backslash before a single or double quote or NULL
character in user input (if magic quotes is enabled, this is required before outputting a string
with the echo statement)

<h2>Handling Submitted Form Data</h2>
• It is necessary to validate Web form data to ensure PHP can use the data<br>
• The optimal way to ensure valid form data is only allow the user to enter an acceptable
response<br>
• Examples of data validation include verifying that<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– the user did not leave any required fields blank<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– an e-mail address was entered in the correct format<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– the user did not exceed the word limit in a comment box<br>

<h2>Determining if Form Variables Contain Values</h2>
• When form data is posted using the “post” or “get” method, all controls except unchecked radio
buttons and checkboxes get sent to the server even if they do not contain data<br>
• The empty() function is used to determine if a variable contains a value<br>
• The empty() function returns FALSE if the variable being checked has a nonempty and nonzero
value, and a value of TRUE if the variable has an empty or zero value<br>


<h2>Validating Entered Data</h2>
• Validating form data refers to verifying that the value entered in a field is appropriate for the<br>
data type that should have been entered
• The best way to ensure valid form data is to build the Web form with controls (such as check
boxes, radio buttons, and selection lists) that only allow the user to select valid responses<br>
• Unique information, such as user name, password, or e-mail must be validated<br><br>

<h2>Validating Numeric Data</h2>
• All data in a Web form is string data and PHP automatically converts string data to numeric data
if the string is a number<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The is_numeric() function is used to determine if a variable contains a number<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The round() function can be used to a numeric variable with an appropriate number of decimal places<br><br>

<h2>Validating String Data</h2>
• Regular expression functions are some of the best tools for verifying that string data meets the
strict formatting required for e-mail addresses, Web page URLs, or date values<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The stripslashes() function removes the leading slashes for escape sequences<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The trim() function removes any leading or trailing white space from a string<br><br>

<h2>Handling Multiple Errors</h2>
• When processing a Web form, it is best to track any errors on the form during processing and
then redisplay the form for the user to correct all the errors at one time<br><br>

<h2>Creating an All-in-One Form</h2>
• A two-part form has one page that displays the form and one page that processes the form data
<br><br>
• For simple forms that require only minimal processing, it’s often easier to use an All-in-One
form—a single script used display a Web form and process its data<br><br>

<h4>Validating an All-in-One Form</h4>
• It uses a conditional to determine if the form has been submitted or if it is being viewed for the first time<br>
– The isset() function is used to determine if the $Submit variable has been set<br>
if (isset($Submit)) {<br>
// Validate the data<br>
}<br>
– The argument of the isset() function is the name assigned to the Submit button in the
Web form<br><br>

<h2>Redisplaying the Web Form</h2>
• If the submitted data did not pass all validation checks or no data has been entered, the All-in-One form will display the Web form, for the user to enter data for the first time or re-enter data that did not pass validation<br>
if (isset ($_POST['Submit'])) {<br>
// Process the data<br>
}<br><br>

else {<br>
// Display the Web form<br>
}<br><br>


Using Form Image Buttons for Navigation<br>
• Buttons must be enclosed by a opening and closing form tag<br>
input type = "image" src = "home.jpg" name = "home" style = "border:0" alt= "Home" <br>
• x- and y- coordinates are sent in the form “Button.x” and “Button.y” where “Button” is the value
of the name attribute (home)<br>
• In PHP, the periods are replaced by underscores for the $_GET or $_POST array indexes<br>
• The $_GET and $_POST array would have two elements “home_x” and “home_y”<br><br>


Displaying the Dynamic Content<br>
• The $_REQUEST autoglobal can be used to access the results from form data sent using either
the “get” or “post” methods<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– The syntax to save the value of the page attribute to a variable is shown below:
$displayContents = $_REQUEST["page"];<br>
• The dynamic content section of the index.php file will contain the code to determine which
content page to display<br>

	</body>
</html>