<?php

/*****************************************
 * Created this test for job interviews. *
 *****************************************/

/**
 * Directions
 *
 * Read the direction in the Q and respond below A.
 *
 * All answers should be working code. When done, create a new branch, name it after your first name and then
 * using Github initiate a pull request into release/adam branch. If a conflicts emerges, resolve the conflicts before
 * pull request is initiated.
 */

//------------------------------------------------ Question 1
// Q: Write a simple class which can do the following.
$person = Person::make(array('first_name' => 'John', 'last_name' => 'Smith', 'date_of_birth' => '1984/04/06'));

print $person->getFullName(); // John Smith
print $person->getDateOfBirth(); // 1984/04/06
print $person->getDateOfBirth('F j, Y'); // April 6, 1984

// A:



//------------------------------------------------ Question 2
// Q: Find and replace (use the instructions within the string)

$str = "In this snippet we want to replace txet with text and text with txet.";

// A:

//------------------------------------------------ Question 3
// Q: Reverse the order of the first five directories of this path. Return a string.

$path = "/a/b/c/d/e/f/g/h/i";

// A:

//------------------------------------------------ Question 4
// Q: Refactor and clean up this piece of code. (REQ PHP 5.3+)

$a=10;$A=function(&$a){$B=function($b)use($a){return $a*$b;};$a=$B($a++);};++$a;$A($a);print $a;

// A:

//------------------------------------------------ Question 5
// Q: Turn array into object

$array = array(1,'a',array('a' => 'A', 'b' => array('c' => array(1,2,3,4,5,'c' => array(1,2,3,4,5,'c' => array(1,2,3,4,5,'c' => array(1,2,3,4,5)))))));

// A:
