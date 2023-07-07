<html>
<head> 
<title> MIDTERM ACTIVITY 3 </title>
<style>

	body {
		font-family: Courier;
		background-color: #ede0a9  ;
		
	}
	table{
		width: 50%;
		border-collapse: collapse;
		margin-left: 25%;
		margin-right: 25%;
	}
	
	th {
		border: 2px solid black;
	}
	
	h2 {
		font-weight: bold;
		font-family: "Verdana";
		margin-left: 25%;
		margin-right: 25%;
		text-align: center;
		padding-top: 25px;
		
	}
	
	h3 {
		font-family: "Verdana";
		color:#5E1914 ;
	}
	
	p {
		font-family: "Verdana";
		margin-left: 25%;
		margin-right: 25%;
		text-align: center;
		padding-bottom: 25px;
	}
	
	hr {
		width: 100%;
		height: 10px;
		background-color: #5E1914;
		margin-right: auto;
		margin-left: auto;
		margin-top: 5px;
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

<?php
$title = "Desiderata";

$body = "Go placidly amid the noise and the haste, and remember what peace there may be in silence. 
As far as possible, without surrender, be on good terms with all persons.
Speak your truth quietly and clearly; 
and listen to others, even to the dull and the ignorant; they too have their story.
Avoid loud and aggressive persons; they are vexatious to the spirit. 
If you compare yourself with others, you may become vain or bitter, 
for always there will be greater and lesser persons than yourself.
Enjoy your achievements as well as your plans. 
Keep interested in your own career, however humble; 
it is a real possession in the changing fortunes of time.
Exercise caution in your business affairs, for the world is full of trickery. 
But let this not blind you to what virtue there is; 
many persons strive for high ideals, and everywhere life is full of heroism.
Be yourself. Especially do not feign affection. Neither be cynical about love; 
for in the face of all aridity and disenchantment, it is as perennial as the grass.
Take kindly the counsel of the years, gracefully surrendering the things of youth.
Nurture strength of spirit to shield you in sudden misfortune. 
But do not distress yourself with dark imaginings. 
Many fears are born of fatigue and loneliness.
Beyond a wholesome discipline, be gentle with yourself. 
You are a child of the universe no less than the trees and the stars; 
you have a right to be here.
And whether or not it is clear to you, no doubt the universe is unfolding as it should. 
Therefore be at peace with God, whatever you conceive Him to be. 
And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. 
With all its sham, drudgery and broken dreams, it is still a beautiful world. 
Be cheerful. Strive to be happy.";


$text ="Desiderata
Go placidly amid the noise and the haste, and remember what peace there may be in silence. 
As far as possible, without surrender, be on good terms with all persons.
Speak your truth quietly and clearly; 
and listen to others, even to the dull and the ignorant; they too have their story.
Avoid loud and aggressive persons; they are vexatious to the spirit. 
If you compare yourself with others, you may become vain or bitter, 
for always there will be greater and lesser persons than yourself.
Enjoy your achievements as well as your plans. 
Keep interested in your own career, however humble; 
it is a real possession in the changing fortunes of time.
Exercise caution in your business affairs, for the world is full of trickery. 
But let this not blind you to what virtue there is; 
many persons strive for high ideals, and everywhere life is full of heroism.
Be yourself. Especially do not feign affection. Neither be cynical about love; 
for in the face of all aridity and disenchantment, it is as perennial as the grass.
Take kindly the counsel of the years, gracefully surrendering the things of youth.
Nurture strength of spirit to shield you in sudden misfortune. 
But do not distress yourself with dark imaginings. 
Many fears are born of fatigue and loneliness.
Beyond a wholesome discipline, be gentle with yourself. 
You are a child of the universe no less than the trees and the stars; 
you have a right to be here.
And whether or not it is clear to you, no doubt the universe is unfolding as it should. 
Therefore be at peace with God, whatever you conceive Him to be. 
And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. 
With all its sham, drudgery and broken dreams, it is still a beautiful world. 
Be cheerful. Strive to be happy.";

// Count the number of words
$wordCount = str_word_count($text);

// Count the occurrences of 'a', 'an', and 'the'
$aCount = substr_count( $text, ' a ');
$anCount = substr_count($text, ' an ');
$theCount = substr_count($text, ' the ');

// Change 'the' to 'THE'
$text = str_ireplace('the', 'THE', $text);

// Find words ending with 'ly'
$lyWords = [];
preg_match_all('/\b\w+ly\b/i', $text, $matches);
if (!empty($matches[0])) {
    $lyWords = $matches[0];
    
}

?>

<hr>

<?php

echo "<h2>$title</h2>";

echo "<p>$body</p>";

?>

<hr>

<h3> How many words? </h3>

<?php

echo "The poem contains $wordCount words.\n";

?>

<h3> Number of articles present: </h3>

<?php

echo "  a: $aCount\n";
echo "<br><br>";
echo "  an: $anCount\n";
echo "<br><br>";
echo "  the: $theCount\n";
echo "<br><br>";
echo "Total: " . ($aCount + $anCount + $theCount) . "\n";

?>

<h3> Change "the" to "THE". </h3>

<?php

echo "$text\n";

?>

<h3> Output the words ending with "ly". </h3>

<?php

foreach ($lyWords as $word) {
    echo "$word <br><br>";
}

?>