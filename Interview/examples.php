<?php
// #1How many characters in a string but without using a function?

// declaring a counter and initializing at 0. The reason for this is to be ready for a string of any length.
$counter = 0;
// declaring the string
$string = "AABSDWAAV";
// $arrayChars is defining an array of characters. str_split is going to split the string into characters. $string is the string that you
// will be splitting.
$arrayChars = str_split($string);
// foreach is the loop that iterates over the element of the array and for each iteration it refers to the current element as value.
// value can be whatever identifiers you want to use
foreach($arrayChars as $value)
// {} isolate each iteration of the foreach. $counter is the current number of characters/
	//++ increments the counter by 1 for each element in the array
{ $counter++; }
//printing the result
echo "Result is " . $counter;

//////////////////////////////////////////////////

// #2 How many characters in a string are vowels?

// declaring a counter and initializing at 0. The reason for this is to be ready for a string of any length.
$counter = 0;
// declaring the string
$string = "AABSDWAAV";
// $arrayChars is defining an array of characters. str_split is going to split the string into characters. $string is the string that you
// will be splitting.
$arrayChars = str_split($string);
// foreach is the loop that iterates over the element of the array and for each iteration it refers to the current element as value.
// value can be whatever identifiers you want to use
foreach($arrayChars as $value)
	//	//++ increments the counter by 1 for each element in the array
{
	// this checks the value to ensure it is identical to either of the values specified

	if($value === "A" || $value === "E" || $value === "I" || $value === "O" || $value === "U")
		// counter will then increment by 1 if the value (character) is identical to the value (character) that we are looking for
		$counter++;
}
//printing the result
echo "Result is ". $counter;

// QUESTION: What would happen if you had a lowercase vowel?
// ANSWER: The answer would be 0 because you are looking to an identical uppercase vowel.
// To count a lower case vowel you could add 5 more conditions to the if statement, one for each lower case vowel but this is too fucking long
// Another solution, that's smarter, is making the values uppercase before we compare. This can be done by using
// $UpperValue = strtoupper($value);  here you are defining the variable $upperValue. The variable is the variable $value made uppercase by strtoupper.

/////////////////////////////////////////////////////

$counter = 0;
// declaring the string
$string = "AABSDWAAVa";
// $arrayChars is defining an array of characters. str_split is going to split the string into characters. $string is the string that you
// will be splitting.
$arrayChars = str_split($string);
// foreach is the loop that iterates over the element of the array and for each iteration it refers to the current element as value.
// value can be whatever identifiers you want to use
foreach($arrayChars as $value)
	//	//++ increments the counter by 1 for each element in the array
{
	// this checks the value to ensure it is identical to either of the values specified
	$UpperValue = strtoupper($string);
	if($UpperValue === "A" || $UpperValue === "E" || $UpperValue === "I" || $UpperValue === "O" || $UpperValue === "U")
		// counter will then increment by 1 if the value (character) is identical to the value (character) that we are looking for
		$counter++;
}
//printing the result
echo "Result is ". $counter;
