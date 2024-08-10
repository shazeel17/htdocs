<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP 2024</h1>
<p></p>
<?php 
echo "hello world <br>";

?>
<!-- echo and ECHO are the same  -->
<?php 
 
ECHO "Welcome <br>";
?>


<!-- $color isn't same as $COLOR -->

<?php 
$color = "red";

echo "My car is" . $color . "<br>";
echo "My car is "  . $COLOR . "<br>";
echo "My car is" . $ColOr . "<br>";

?>
<h1>PHP VARIABLES</h1>
<!-- PHP VARIABLES -->
<!-- Creating (Declaring) PHP Variables -->
<!--  $x = 5;
    $y = "john"; -->


    <!-- Output Variables -->
<?php
    $txt = "Fotball";
echo "I love $txt! <br>";

?>
<?php
    $txt = "Soccer";
echo "I love" . $txt . "! <br>";

?>

<h2>Addition Of Variables</h2>
<!-- Addition of variables  -->
<?php 
$x = 5;
$y =4;

echo $x + $y ;
?>

<?php
$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;
?>
<h2>Var_dump()</h2>
<!-- the var-dump() return the data type  -->
<?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>
<h2>Assigning string to variable</h2>
<!-- Assign string to variables -->

<?php 
$x = "john";
echo $x;

?>


<!-- assigning multiple variables  -->
 <?php 
 $x= $y= $z = 5;
 echo $x, $y, $z;

 ?>


<!-- PHP Variables Scope -->

<!-- PHP has three different variable scopes:
local
global
static -->

<!-- Global and Local Scope -->


<!--  Global Scope  -->

<h1>PHP Varible Scope</h1>


<?php 
$x = 5; 

function myTest() {

//   echo "<p>Variable x inside function is: $x</p>";
 }
myTest();

echo "<p>Variable x outside function is: $x</p>";
?> 

<!-- Local scope  -->


<!-- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function: -->

<!-- 
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>"; -->

<!-- PHP echo and print Statements -->
<!-- the difference between echo and print is more or less the same . echo has no return value while print has return value of 1 -->
<h1>Echo and Print Statements</h1>
<!-- the echo statement can be used with or without parenthesis -->
<?php

echo ("hello <br>");
echo "hello";

?>



<!-- note that echo can contain html tags -->

<?php 
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

?>

<!-- The following example shows how to output text and variables with the echo statement: -->

<?php 
$txt1 = "Learn PHP";
$txt2 = "Google Fonts";
echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>



<!-- Using single quotes -->
<!-- Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
When using double quotes, variables can be inserted to the string as in the example above.
When using single quotes, variables have to be inserted using the . operator, like this: -->

<?php  
$txt1 = "learn PHP";
$txt2 = "Google fonts";
echo '<h2>'. $txt1 . '</h2>';
echo '<p> Study PHP at' . $txt2 . '</p>'
?>

<!-- PHP Data Types -->
 <!-- PHP supports the following data typoes :
 string 
 integer 
 float 
 boolean 
 array 
 object 
 Null 
 resource -->


<!-- the var_dump() returns the datatype and value -->
 <h1>PHP - Data types</h1>
 <?php 
 $x = 5;
 var_dump($x);
echo "<br>";
 ?>


<?php 
$x = "PHP is fun ";
$y = "PHP is easy to use ";
echo "<br>";

var_dump($x,$y);
?>



<?php  
$x = 13.876;
echo "<br>";

var_dump($x);
?>

<?php 
$x = true;
echo "<br>";

var_dump($x);
?>


<?php 
$cars = array("BMW","Toyota","Mercedes");
echo "<br>";

var_dump($cars);

?>

<?php 
class Car{
public $color;
public $model;
public function __construct($color,$model)
{
    $this->color = $color;
    $this->model = $model;
}public function message(){
    return "My car is a" . $this->color . " " . $this->model . "!";
}
}
$myCar = new Car("blue","supreme");
var_dump($myCar);
echo "<br>";

?>

<?php 
class Clubs{
public $worth;
public $name;
public function __construct($worth,$name){
    $this->worth = $worth;
    $this->name = $name;
}public function message(){
    return "My club has" . $this->worth . "and the name of my club is" . $this->name . "!";
}

    
}
$myclub = new Clubs("high","FC Barcelona");
var_dump($myclub);
echo "<br>";



?>
<?php 
$x = null;
var_dump($x);
echo "<br>";

?>


<!-- now we will work on how to change data types  -->
  


<?php 
$x = 5;
$x = (string)$x;
var_dump($x);
echo "<br>";

?>



<!--  STRINGS   -->

<!-- string in php are surrounded by double quotations or single quotations  -->


<h1>Strings</h1>
<?php 
 echo "Hello world ";
 echo 'Hello world <br>';

?>


<!-- Now the problem is when to use double quotations or when to ingle quotations  -->


<!-- when we use string with double quotations it returns the value of a variable while sinle quotations can't  -->
 <!-- Here's the example od single and double quotation -->


 <?php 
$x = "Marry";
echo " Hello $x" ;
echo "<br>";

 ?>

 <?php 
$x= "Marry";
echo 'Hello $x';
echo "<br>";

 ?>


<!-- strlen() is used for string length  -->


<?php 
echo strlen("Hello world");
echo "<br>";

?>


<!-- str_word_count() is used to find the number of words -->

<?php 
echo str_word_count("I am a mango");
echo "<br>";


?>


<!-- strpos() is used to find specific word inside a string -->

<?php 
echo strpos("I am a mango", "mango" );
echo "<br>";


?>
<!-- PHP - Modify Strings -->
<h2>Modify Strings</h2>

<?php 
$x = "I am a mango";
echo strtoupper($x);
echo "<br>";

?>

<?php 
$x = "I am a mango";
echo strtolower($x);
echo "<br>";

?>

<?php 
$x = "I am a mango";
echo str_replace("mango", "an Apple", $x);
echo "<br>";

?>

<!-- PHP - Concatenate Strings -->

<!-- to combine two or more string we use "."  operator-->
<h2>  Concatenate Strings  </h2>
<?php 
$x = "I am a";
$y = "mango";
$z = $x . $y;
echo $z;
echo "<br>";

?>

<!--  the result of above code would be i am amango now we will learn how to add space -->

<?php 
$x = "I am a";
$y = "Mango";
$z = $x . " " . $y;
echo $z;
echo "<br>";

?>

<!-- The easier way to do this is by wrapping it into double quotes -->
 
<?php 
$x = "I am a";
$y = "Mango";
$z = "$x $y";
echo $z;
echo "<br>";

?>


<!-- Escape Characters -->
<h2>Escape Characters</h2>
<?php 
$x = "Football is a \"Global\" sport";
echo $x;
echo "<br>";

?>




<!-- More escape characters are use in php -->

<!-- \' -->
 <!-- \" -->
  <!-- \$ -->
  <!-- \n -->
  <!-- \r -->
  <!-- \t -->
  <!-- \f -->
  <!-- \ooo -->
  <!-- \xh -->



  <!-- PHP - NUMBERS -->


  <!-- there are three main types of numbers in PHP   -->
   <!-- Integer -->
   <!-- Float -->
   <!-- number strings -->


   <!-- in addition to it, php has two more data types udes for numbers -->
    <!-- Infinity -->
    <!-- NaN - which stands for not a number -->
     <h1>PHP - NUMBERS</h1>
<?php 
$a= 12;
$b= 12.4;
$c= "12";

var_dump($a);
var_dump($b);
var_dump($c);
echo "<br>";
?>


<!-- Php has following types to check wheather your variable is integer or not -->
<!-- is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int() -->


<?php 
$x = 120;
var_dump(is_int($x));
echo "<br>";
?>



<?php 
$y = 34.34;
var_dump(is_int(34.54));
echo "<br>";
?>

<!-- PHP Floats -->
<h2>PHP - Floats</h2>
<?php 
$x= 23.4;
var_dump(is_float($x));
echo "<br>";
?>

<?php 
$x= 23;
var_dump(is_float($x));
echo "<br>";
?>




<!-- PHP - infinity -->
<h2>PHP - Infinity</h2>
<?php 
$x= 12e382;
var_dump(is_infinite($x));
echo "<br>";
?>


<?php 
$x= 12e382;
var_dump(is_infinite($x));
echo "<br>";
?>


<!-- PHP - NaN -->
<h2>PHP - NaN</h2>
<?php 
$x = acos(4);
var_dump(is_nan($x));
echo "<br>";
?>

<?php 
$x = 4;
var_dump(is_nan($x));
echo "<br>";
?>

<!-- PHP - Numerical string -->
<h2>PHP - Numerical String</h2>
<?php 
$x= 3872;
var_dump(is_numeric($x));
echo "<br>"
?>


<?php 
$x= 38.72;
var_dump(is_numeric($x));
echo "<br>";
?>
<?php 
$x= "38";
var_dump(is_numeric($x));
echo "<br>"
?>

<?php 
$x= "hello";
var_dump(is_numeric($x));
echo "<br>"
?>
<?php 
$x = "23.54" + 23;
var_dump(is_numeric($x));
echo "<br>";
?>



<!-- PHP casting strings and Floats to integer  -->


<!-- Cast float to integer  -->

<h2>PHP casting Strings and Floats to Integer</h2>

<?php 
$x= 23.65;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
?>
<!-- Casting string to integer -->
<?php 
$x= "34.4";
$int_cast = (int)$x; 
echo $int_cast;
echo "<br>";
?>



<!-- Php casting -->
 <h1>PHP - CASTING</h1>
 <!-- PHP - Data types -->

 <h2>PHP - Changing Data types</h2>  
 
 <!-- (string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL -->

<h2>Cast to String</h2>
<!--  Cast to string   -->
  <?php 
$a = 3;       // Integer
$b = 8.94;    // Float
$c = "hello"; // String
$d = false;    // Boolean
$e = NULL;    // NULL


$a = (string)$a;
$b = (string)$b;
$c= (string)$c;
$d=(string)$d;
$e = (string)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>

<!-- Cast to Integer -->
 <h2>Cast to Integer</h2>
  <?php 
$a = 3;       // Integer
$b = 8.94;    // Float
$c = "hello"; // String
$d = false;    // Boolean
$e = NULL;    // NULL

$a = (int)$a;
$b = (int)$b;
$c = (int)$c;
$d = (int)$d;
$e = (int)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>

<!-- Cast to Float -->
<h2>Cast to Float</h2>

<?php 
$a = 3;       // Integer
$b = 8.94;    // Float
$c = "hello"; // String
$d = false;    // Boolean
$e = NULL;    // NULL
               

$a = (float)$a;
$b = (float)$b;
$c = (float)$c;
$d = (float)$d;
$e = (float)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>

<!-- Cast to Boolean -->
<h2>Cast to Boolean</h2>


<?php 



$a = 3;       // Integer
$b = 8.94;    // Float
$c = "hello"; // String
$d = false;    // Boolean
$e = NULL;    // NULL



$a = (bool)$a;
$b = (bool)$b;
$c = (bool)$c;
$d = (bool)$d;
$e = (bool)$e;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

?>


<!-- Cast to Array -->
<h2>Cast to Array</h2>

<?php 

$a = 3;       // Integer
$b = 8.94;    // Float
$c = "hello"; // String
$d = false;    // Boolean
$e = NULL;    // NULL

$a = (array)$a;
$b = (array)$b;
$c = (array)$c;
$d = (array)$d;
$e = (array)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

?>

<!-- object to an array -->

<?php 
class restraunt{
public $adress;
public $quality;
public function __construct($adress,$quality)
{
    $this->adress = $adress;
    $this->quality = $quality;
}public function message(){
return "My restraunt is at" . $this->adress . "and they provide" . $this->quality . "quality food";
}
}
$myrestraunt = new restraunt("Pakistan","supreme");
$myrestraunt = (array)$myrestraunt;
var_dump($myrestraunt);

?>

<!-- Cast to Object -->
<h2>Cast to Object</h2>

<?php 

$a = 3;       // Integer
$b = 8.94;    // Float
$c = "hello"; // String
$d = false;    // Boolean
$e = NULL;    // NULL

$a = (object)$a;
$b = (object)$b;
$c = (object)$c;
$d = (object)$d;
$e = (object)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>


<!-- Arrays to object -->
<h2>Arrays to Object</h2>
<?php 
$a = array("Apples", "Bananas", "Oranges"); // indexed array
$b = array("Messi"=>"10", "Penaldo"=>"7", "Neymar"=>"11"); // associative array

$a = (object) $a;
$b = (object) $b;
var_dump($a);
var_dump($b);
?>


<!-- Cast to null -->
 <h2>Cast to Null</h2>

 <!--


// $a = 3;       // Integer
// $b = 8.94;    // Float
// $c = "hello"; // String
// $d = false;    // Boolean
// $e = NULL;    // NULL

// $a = (unset) $a;
// $b = (unset) $b;
// $c = (unset) $c;
// $d = (unset) $d;
// $e = (unset) $e;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// ?> -->



<!-- PHP Math -->
<h1>PHP Math</h1>

<!-- PHP pi() Function -->
 <h2>PHP pi() Function</h2>
<?php 
echo (pi());
echo "<br>";
?>

<!-- PHP min() and max() Functions -->
 <h2>PHP min() and max() Functions</h2>
 <?php 
echo(min(0, 130, 40, 20, -8, -100));
echo(max(0, 170, 20, 20, -8, -500));
 ?>

<!-- PHP abs() Function -->
 <h2>PHP abs() Function</h2>
<?php 
echo(abs(-6.7));
echo "<br>";
?>

<!-- PHP sqrt() Function -->
 <h2>PHP sqrt() Function</h2>
 <?php 
echo(sqrt(3));
echo "<br>";

?>
 

 <!-- PHP round() Function -->
<h2>PHP round() Function</h2>
<?php 
// echo(round(0.60));
echo(round(0.9));
echo "<br>";
?>


<!-- Random Numbers -->
 <h2>Random Numbers</h2>
<?php
 echo(rand());
 echo "<br>";
?>


<!-- PHP Constants -->
 <h1>PHP Constants</h1>

<h2>case-sensitive</h2>
 <?php 
define("GREETING","Welcome to php tutorials");
echo GREETING;
echo "<br>"
?>

<h2>case-insensitive</h2>
<?php 
define("MEET","Welcome to php tutorials",true);
echo MEET;
echo "<br>";

?>


<!-- PHP CONST KEYWORD -->

<h2>PHP Const Keyword</h2>

<?php 
const myClub = "Barcelona";
echo myClub;
echo "<br>";
?>


<!-- PHP Constant Arrays -->


<h2>PHP Constant Arrays</h2>

<?php 
define("clubs",["FC BARCELONA","REALMADRID CF", "FC BAYERN"]);
echo clubs[0];
echo "<br>";
?>


<!-- Contants are global -->
<h2>Constants Are Globals</h2>

<?php 
define("HELLO","Welcome to php tutorials");


function myTest2(){
    echo HELLO;
}    

myTest();

?>


<!-- PHP Maic Constants -->
 <h2>PHP Magic Constants</h2>

 <!-- __CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any. -->


<!-- PHP Operators -->
<h1>PHP Operators</h1>


<!-- PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators 
 -->
<h2>PHP Arithmetic Operators</h2>
<!-- Addition -->
<h3>Addition</h3>
<?php 
$x = 6;
$y = 12;
echo $x + $y;
echo "<br>";
?>  

<!-- Subtraction -->
 <h3>Subtraction</h3>
<?php 
$x = 87;
$y = 12;
echo $x - $y;
echo "<br>"
?>

<!-- Multiplication -->
<h3>Multiplication</h3>

<?php 
$x = 4;
$y = 10;
echo $x * $y;
echo "<br>";
?>

<!-- Division -->
<h3>Division</h3>

<?php 
$x = 10;
$y = 2;
echo $x/$y;
echo "<br>";
?>


<!-- Modulus -->

<h3>Modulus</h3>



<?php 
$x =7;
$y = 17;
echo $x % $y;
echo "<br>";
?>


<!-- Exponential -->

<h3>Exponential</h3>

<?php 
$x = 2;
$y = 10;
echo $x ** $y;
echo "<br>";
?>


<!-- PHP Assigment Operator -->
 <h2>PHP Assigment Operator</h2>

 <?php 
$x = 4;
$y = 6;
echo $x = $y;
echo"<br>";

?>

<!-- Addition -->

<?php 
$x = 50;
$y = 50;
echo $x+=$y;
echo "<br>";
?>


<!-- Subtraction -->

<?php 
$x = 10;
$y = 2;
echo $x-=$y;
echo "<br>";
?>

<!-- Multiply -->

<?php 
$x = 3;
$y = 2;
echo $x*=$y;
echo "<br>";
?>

<!-- Division -->

<?php 
$x = 10;
$y = 2;
echo $x/=$y;
echo "<br>";
?>


<!-- Modulus -->

<?php 
$x = 10;
$y = 23;
echo $x%= $y;
echo "<br>";
?>

<!-- PHP Comparison Operators -->

<h2>PHP Comparison Operators</h2>

<!-- Equal -->

<?php 
$x= 5;
$y= 5;
echo $x == $y;
echo "<br>";
?>


<!-- Identical -->


<?php 
$x = 5;
$y = 5;
echo $x == $y;
echo "<br>";
?>

<!-- Not equal to  -->

<?php 
$x = 5;
$y = 3;
echo $x != $y;
echo "<br>";
?>

<!-- Not Equal -->


<?php 
$x = 3;
$y = 5;
echo $x <>$y;
echo "<br>";
?>

<!-- Greater than -->

<?php 
$x = 10;
$y = 8;
echo $x > $y;
echo "<br>";
?>

<!-- Less than -->

<?php 
$x = 5;
$y = 24;
echo $x < $y;
echo "<br>";
?>


<!-- Greater than equal to -->
<?php
$x = 10;
$y =10;
echo $x >= $y;
echo "<br>";
?>


<!-- Less than equal to -->

<?php 
$x = 25;
$y = 34;
echo  $x <= $y;
echo "<br>"; 
?>

<!-- Spaceship -->

<?php 
$x =13;
$y =13;
echo $x <=> $y;
echo "<br>"; 
?>


<!-- PHP Increment / Decrement Operators -->

<h2>PHP Increment / Decrement Operators</h2>


<!-- pre increment operator -->

<?php 
$x = 4;
echo ++$x;
echo "<br>";
?>

<!-- Post increment operator -->
<?php 
$x = 5;
echo $x++;
echo "<br>";
?>

<!-- Pre decrement operator -->

<?php 
$y = 4;
echo --$y;
echo "<br>";
?>


<!-- Post decrement operator -->
 

<?php 
$y = 3;
echo $y--;
echo "<br>";
?>



<!-- PHP Logical Operators -->

<h2>PHP Logical Operators</h2>

<!-- and operators -->

<?php 

$x= 100;
$y= 50;

if($x== 100  and $y== 50){
echo "Hello world";
echo "<br>";
}
?>


<!-- or Operators -->
 <?php 
$x = 100;
$y = 60;

if($x==100 or $y==50){
echo "Hello world";
echo "<br>";
}
?>


<!-- XOR operator -->


<?php 
$x = 100;
$y == 60;

if($x == 100 xor $y = 50){
    echo "Hello world";
    echo "<br>";
}
?>

<!-- And operator&& -->


<?php 
$x = 100;
$y = 50;
if ($x == 100 && $y = 50){
echo "Hello world";
echo "<br>";
}
?>


<!-- OR Operator ||-->

<?php 
$x = 100;
$y = 60;
if($x= 100 || $y=50){
    echo "Hello world";
    echo "<br>"; 
}
?>


<!-- Not ! -->

<?php 
$x = 100;
if(!$x = 50){
    echo "Hello World";
    echo "<br>";
}
?>



<!-- PHP String Operators  -->

<h2>PHp String Operators</h2>

<!-- Concatenation -->
<?php 
$txt1 = "Hello";
$txt2 = "Mark";
echo $txt1 . " " . $txt2;
echo "<br>";
?>

<!-- Concatenation Assigment -->


<?php 
$txt = "Hello";
$txt2 = "Mark";
echo $txt1 .= $txt2;
echo "<br>";
?>




<!-- PHP Array Operators -->
 <h2>PHP Array Operators</h2>
<!-- Union -->
 <?php 
$x = array("a" => "apple", "b" => "oranges");
$y = array("c" => "mangoes", "d" => "watermelon");

print_r($x + $y);
echo "<br>";
?>


<!-- Equality -->

<?php 
$x = array("a" => "apples", "b" => "oranges");
$y = array("c" => "mangoes", "d" => "watermelon");
var_dump($x == $y);
echo "<br>";
?>

<!-- Identity -->

<?php 
$x = array("a" => "apple", "b" => "oranges");
$y = array("c" => "mangoes", "d" => "watermelon");
var_dump($x === $y);
echo "<br>";
?>


<!-- Inequality -->

<?php 
$x = array("a" => "apple", "b" => "oranges");
$y = array("c" => "mangoes", "d" => "watermelon");
var_dump($x != $y);
echo "<br>";
?>


<!--  Inequality -->

<?php 
$x = array("a" => "apples","b" => "oranges");
$y = array("c" => "mangoes", "d" => "watermelon");
var_dump($x <> $y);
echo "<br>";
?>


<!-- Non-identity -->
<?php 
$x = array("a" => "apples", "b" => "oranges");
$y = array("c" => "mangoes", "d" => "watermelon");
var_dump($x !== $y);
echo "<br>";
?>


<!-- PHP Conditional Assignment Operators -->
 <h2>PHP Conditional Assignment Operators</h2>


 <!-- Ternary -->

<?php 
echo $status =  (empty($user)) ? "anonymous" : "logged in";
$user = "Steven Gerard";

echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";
?>

<!-- Null coalescing -->

<h2>Null coalescing</h2>

<?php 
echo $user = $_GET[$user] ?? "anonymous";
echo "<br>";

echo $color = $color ?? "red"; 
echo "<br>";
?>


<!-- PHP If....Else....Elseif -->
 <h1>PHP If....Else....Elseif</h1>

 <h2>PHP if Statements</h2>
<!-- PHP if Statements -->

<h3>PHP Conditional Statements</h3>

<?php 
$x = 30;
if($x = 30){
echo "You Did Great :-)";
echo "<br>";
}
?>

<h2>PHP if Operators</h2>
<!-- PHP if Operators -->
<h3>Comparison Operators</h3>

<?php 
$f = 23;

if($f == 23){
    echo "Condition is true";
    echo "<br>";
}
?>

<?php 
$x =10;
$y = 10;
 
if($x== 10 && $y ==10){
    echo "Both conditions are true";
    echo "<br>";
}
?>

<?php 
$value = 5;
if($value == 2 || $value == 3 || $value == 4 ||$value == 5 ||$value == 6 ||$value == 7 ){
    echo "$value is between 2 and 7";
    echo "<br>";
}
?>

<h2>PHP if...else Statements</h2>

<?php 
$name = "Marco Van Batsen";
if($name = "Marco Van Batsen"){
    echo "Correct Name";
}else {
    echo "wrong";
}
?>

<h2>PHP if...else...elseif Statements</h2>

<?php
$x = 10;
if ($x <10 ){
echo "hyyyy";
echo "<br>";

} elseif($x> 10){
    echo"yes";
  echo "<br>";

}else{
  echo  "Wrong Number";
  echo "<br>";
}
?>

<h2>PHP Shorthand if Statements</h2>

<h3>Short Hand If</h3>


<?php 
$a = 5;
if($a <10) $b ="hello";
echo $b;
echo "<br>";
?>

<h3>Short Hand If else</h3>

<?php 
$a = 15;
$b = $a <10 ? "hello" : "Bye";
echo $b;
echo "<br>"; 
?>

<h2>PHP Nested if Statement</h2>
<!-- PHP Nested if Statement -->
<?php 
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
    echo "<br>";
  }
}
?>


<!-- PHP switch Statement -->
 <h1>PHP switch Statement</h1>

 <h2>The PHP switch Statement</h2>

<?php
$favcolor = "red";

switch($favcolor){
case "red":
    echo "Your favorite color is red";
    echo "<br>";
    break;
    case "yellow":
        echo "Your favorite color is green";
        echo "<br>";  
        break;
        case "Green";
        echo "Your favorite color is yellow";
        echo "<br>";
        break;
        dafault:
        echo "Your favorite color is neither red neither yellow nor green";
        echo "<br>";

}
?>

<!-- The Break Keyword -->
<h2>The Break Keyword</h2>
<?php 
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    echo "<br>";
  case "blue":
    "Your favorite color is blue!";
    echo "<br>";
    break;
  case "green":
    echo "Your favorite color is green!";
    echo "<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
    echo "<br>";
}
?>


<!-- The default Keyword  -->

<h2>The Default KEYWORD</h2>

<?php 
$d = 4;
switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}
?>

<!-- Common Code Blocks -->

<h2>Common Code Blocks</h2>

<?php 



$d = 3;

switch($d){
    case 1:
    case 2:
    case 3:
    case 4:
        case 5:

        case 4:
            echo "This weeks so long";
            break;
            case 5;
            case 6;
            echo "Holidays!";
            break;
            case 0;
            default:
            echo "Something went wrong";

}

?>


<!-- PHP Loops -->
 <h1>PHP Loops</h1>

 <!-- The PHP While Loop -->
  <h2>The PHP While loop</h2>

  <?php 
$i = 1;
while ($i < 9){
    echo $i;
    $i++;
    echo "<br>";
}
?>

<!-- The Break Statement -->

<h2>The Break Statement</h2>


<?php 
$i = 1;
while($i<9){
if($i == 3)break;
echo $i;
echo "<br>";
$i++;
}
?>


<!-- The Continue Statement -->

<h2>The Continue Statement</h2>

<?php 
$i = 1;
while($i>8){
    $i++;
    if( $i == 3)continue;
    echo $i;
    echo "<br>";
}
?>



<!-- Alternative Syntax -->
 
<h2>Alternative Syntax</h2>

<?php 
$i = 1;
while ($i < 6):
  echo $i;
  echo "<br>";
  $i++;
endwhile;
?>


<!-- Step 10 -->

<h2>Step 10</h2>
<?php 
$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i;
  echo "<br>";
}

?>

<!-- PHP do while Loop  -->
 <h2>PHP do while Loop </h2>

 <?php 
$i =1;
do{
    echo $i;
    echo "<br>";
    $i++;
}while($i<6);
 ?>



<!-- The Break Statement  -->
 <h2>The Break Statement</h2>

 <?php 
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
?>


<!-- The Continue Statement -->

<h2>The Continue Statement</h2>

<?php 
do {
    if ($i == 3) continue;
    echo $i;
    echo "<br>";
    $i++;
}while ($i>6);
?>

<!-- PHP for Loop -->
 <h2>PHP for Loop</h2>
<!-- break -->
 <h3>Break</h3>
 <?php 
for ($x = 0; $x <= 10; $x++){
if($x == 3)break;
echo " The number is $x <br>";
}
 ?>


<!-- continue -->
 <h3>Continue</h3>

 <?php 
for ($x=0;$x <=10;$x++){
    if($x == 3)continue;
    echo "The number is $x <br>";
}
?>


<!-- Step 10  -->
<h3>Step 10</h3>

<?php 
for($x = 0;$x = 100; $x+=10){
    echo "The number is $x <br>";
}
?>
</body>
</html>




