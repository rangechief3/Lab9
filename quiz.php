<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

function findGrade($score){
	$percent = ($score/5)*100;
	return $percent;
}


$q1ans = $_POST['question1'];
$q2ans = $_POST['question2'];
$q3ans = $_POST['question3'];
$q4ans = $_POST['question4'];
$q5ans = $_POST['question5'];

$correct = 0;

if($q1ans === 'Lab09'){
$correct += 1;
}

if($q2ans === '2'){
$correct += 1;
}

if($q3ans === 'Jayhawk'){
$correct += 1;
}

if($q4ans === '2'){
$correct += 1;
}

if($q5ans === 'Spain'){
$correct += 1;
}

echo "Question 1: What lab is this exercise for?<br>	Your answer: " .$q1ans. 
"<br>Correct answer: Lab09<br><br>";

echo "Question 2: What is 1 + 1?<br>	Your answer: " .$q2ans. 
"<br>Correct answer: 2<br><br>";

echo "Question 3: What is our mascot?<br>	Your answer: " .$q3ans. 
"<br>Correct answer: Jayhawk<br><br>";

echo "Question 4: What is the square root of 4?<br>	Your answer: " .$q4ans. 
"<br>Correct answer: 2<br><br>";

echo "Question 5: If you dug a hole through the centre of the earth starting from Wellington in New Zealand, which <br>European country would you end up in?<br>	Your answer: " .$q5ans. 
"<br>Correct answer: Spain<br><br>";

echo "You got " .$correct. "/5 questions correct<br>";
echo "Your grade: " .findGrade($correct). "%<br>";

?>
