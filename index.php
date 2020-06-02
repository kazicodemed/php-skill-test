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

echo "\n========A:1========\n";

class PersonQuick
{
    private $arrValues;

    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;

    public function __construct(array $arrValues) {
        $this->arrValues = $arrValues;

        $this->firstName = $this->arrValues['first_name'];
        $this->lastName = $this->arrValues['last_name'];
        $this->dateOfBirth = $this->arrValues['date_of_birth'];

    }

// John Smith
    public function getFullName(): string
    {

        return $this->firstName." ".$this->lastName;
    }

    // 1984/04/06
    public function getDateOfBirth(string $format = "Y/m/d")
    {
        $birtDate = new DateTime($this->dateOfBirth);

        return $birtDate->format($format);


    }


}

class Person
{
    public static function make(array $arrValues)
    {
        return new PersonQuick($arrValues);
    }
}


//------------------------------------------------ Question 2
// Q: Find and replace (use the instructions within the string)

$str = "In this snippet we want to replace txet with text and text with txet.";

// A:

echo "\nA2-Answer Before Replacements \n";
echo $str."\n";

function exchangeWords($str,$x,$y){
    $temp = "hold";
    $str = preg_replace("/".$x."/",$temp,$str);
    $str = preg_replace("/".$y."/",$x,$str);
    $str = preg_replace("/".$temp."/",$y,$str);

    return $str;
}

$str = exchangeWords($str,"txet","text");
echo "\nAfter Replacements \n";

echo $str."\n";


echo "\n================\n";

//------------------------------------------------ Question 3
// Q: Reverse the order of the first five directories of this path. Return a string.

$path = "/a/b/c/d/e/f/g/h/i";

// A:

$pattern = "/\/(\w*)\/(\w*)\/(\w*)\/(\w*)\/(\w*)\//";

//preg_match_all($pattern,$path,$matches);
//
//print_r($matches);

$path = preg_replace($pattern,"/$5/$4/$3/$2/$1/",$path);
print "\n A3 = ".$path;
echo "\n================\n";

//------------------------------------------------ Question 4
// Q: Refactor and clean up this piece of code. (REQ PHP 5.3+)

$a=10;$A=function(&$a){$B=function($b)use($a){return $a*$b;};$a=$B($a++);};++$a;$A($a);print $a;

// A:


$a = 10;
$A = function ($a) {
    return function ($b) use ($a) {
        return $a * $b;
    };
};
++$a;
$calc = $A($a);
$a = $calc($a);
echo "\nA4-Answer after refactoring \n";
print $a;

//------------------------------------------------ Question 5
// Q: Turn array into object

$array = array(1,'a',array('a' => 'A', 'b' => array('c' => array(1,2,3,4,5,'c' => array(1,2,3,4,5,'c' => array(1,2,3,4,5,'c' => array(1,2,3,4,5)))))));

// A:

$obj =  (object)($array);

echo "\n====Answer===\n";
echo gettype($obj);
