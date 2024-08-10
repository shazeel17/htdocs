<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP 2</h1>

    <h2>For Each loop</h2>

    <h3>The foreach Loop on Arrays</h3>


    <?php 
$colors = array("red","green","blue","yellow");
foreach($colors as $x){
    echo "$x <br>";
}
    ?>

    <h3>Keys and Values</h3>

    <?php 
$members = array("peter" => "10", "Mark" => "23", "Henry" => "43");

foreach($colors as $x => $y){
    echo "$x : $y <br>";
}
    ?>

    <h3>The PHP For Each Loops on Object</h3>

    <?php 
class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }
}
$myCar = new Car("red","volvo");
foreach($myCar as $x => $y){
    echo "$x : $y <br>";
}

?>


<h3>The break Statement</h3>

<?php 

$colors = array("red","green","blue","yellow");

foreach($colors as $x){
    if($x == "blue")break;
    echo "$x <br>";
}
?>

<h3>The Continue Statement</h3>

<?php 

$colors = array("red", "green","blue","yellow"); 
foreach($colors as $x){

    foreach($colors as $x){
        if($colors == "blue")continue;
        echo "$x <br>";
    }
}
?>

<h3>For each Byref</h3>

<?php 
$colors = array("red","green","blue","yellow");
foreach ($colors as $x){
    if ($x == "blue") $x = "pink";
    echo "$x <br>";
}
var_dump($x);
?>


<h3>Alternative Syntax</h3>

<?php 
$colors = array("red","green","blue","yellow");
foreach ($colors as $x):
    echo "$x <br>";
endforeach;
?>

<h1>PHP Functions</h1>

<h2>Create a Function</h2>

<?php 
function mymessage (){
    echo "Hello World <br>";
}
?>


<h2>Call a Function</h2>

<?php 

function mymess (){
    echo "Hello World <br>";
} 

mymess();
?>



<h2>Function Arguement</h2>

<?php 
function familyname ($fname){
    echo "$fname dynasty.<br>";
}

familyname("rajput");
familyname("Baloch");
familyname("Marathas");
familyname("Tamil");
familyname("Lodhi");
familyname("Khan");


?>

<h2>PHP Default Arguement Value</h2>

<?php 
function setHeight($minHeight= 50){
echo "The Height Is : $minHeight <br>";
}
setHeight(500);
setHeight();
setHeight(350);
setHeight(2000);
?>


<h2>PHP Functions - Returning Value</h2>

<?php 
function sum($x,$y){
    $z = $x + $y;
    return$z;
}
echo "5 + 10 =". sum(5,10) ." <br>";
echo "78 + 2 =". sum(78,2) ." <br>";
echo "2 + 2 =". sum(2,2) ." <br>";
?>

<h2>Passing Arguement by Refrence</h2>

<?php 
function add_five(&$value){
    $value += 5;
}
$num = 10;
    add_five($num);
    echo "$num <br>";
?>

<h2>Variable Number Of Arguement</h2>

<?php 
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo "$a <br>";
?>

<h1>Nested Function</h1>

<?php 

test();
function test(){
    echo "Test function called <br>";

    function apple (){
        echo "Apple function called";
    }
    apple();
}
?>
</body>
</html>