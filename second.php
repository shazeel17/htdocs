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
        echo "Apple function called <br>";
        
    }
    apple();
}
?>

<h1>Associative arrays</h1>

<?php 
   $userDetails = [
    "name" => "Michael Owen",
    "age" => 76,
    "city" => "Chelsea",
    "email" => "Michaelowen@gmail.com"
   ];
foreach($userDetails as $key => $data){
echo $key ."is".$data;
echo "<br>";
}
?>


<h1>Multidimensional Array</h1>

<?php
$users = [
    [1,"Steven Gerard", "Liverpool", "Stevengerard@gmail.com"],
    [2,"Luis Suarez", "Barcelona", "Luissuarez@gmail.com"],
    [3,"Gotze", "Munchen", "Gotze@gmail.com"]
];
for($i=0;$i<count($users);$i++){
// print_r($users[$i]);
// echo"<br>";9

for($k=0;$k<count($users[$i]);$k++){
    echo$users[$i][$k];
    echo "<br>";
}

}
?>


<h1>Table with Array</h1>


<?php
$users = [
    [1,"Steven Gerard", "Liverpool", "Stevengerard@gmail.com"],
    [2,"Luis Suarez", "Barcelona", "Luissuarez@gmail.com"],
    [3,"Gotze", "Munchen", "Gotze@gmail.com"]
];
echo "<table border=1>";
for($i=0;$i<count($users);$i++){
    echo "<td>";
// print_r($users[$i]);
// echo"<br>";

for($k=0;$k<count($users[$i]);$k++){
    echo "<td>";
    echo$users[$i][$k];
    echo "</td>";
}
echo "</tr>";

}
echo "</table>"
?>


<h1>Multidimensional Associative Array</h1>

<?php 

$users = [
    ["name" => "Shawn","age" => "26","city" => "Florida" ],
    ["name" => "Rooney", "age" => "39", "city" => "Manchester"],
    ["name" => "Anderson", "age" => "47", "city" => "Everton"],
    ["name" => "Djokovic", "age"=> "49", "city" => "Ajax"]
];
echo "<table border=1> ";


foreach($users as $user){
    echo "<tr>";
foreach($user as $key => $item){
    echo "<td>";

    echo "$key is $item ";
    echo "<br>";
echo "</td>";

}
echo "</tr>";


};
echo "</table>";
echo "<br>";

?>

<h1>Add and Remove Element in an Array</h1>


<?php 
$users = ["peter","charles","wayne","cole"];

// print_r($users);

array_push($users,"tony", "Angel", "Kroos");
array_pop($users);
array_splice($users,-2);
print_r($users);
echo "<br>";
?>

<h1>OBJECT</h1>
<?php 
class student{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }public function message(){
        return "Student name is". " ". $this->name . " " ."and his/her age is". " "  . $this->age . "";
    }
}
$student = new student("harry",17);
// echo ;
echo $student->message();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<h1>Students</h1>

<?php 
$students = [
    ["ID" => 1, "Name" => "Harry", "Age" => "19", "Roll No:" => "01", "Standard" => "12th","email" => "he"],
    ["ID" => 2, "Name" => "Michael", "Age" => "15", "Roll No:" => "02", "Standard" => "10th"],
    ["ID" => 3, "Name" => "John", "Age" => "17", "Roll No:" => "03", "Standard" => "9th"],
    ["ID" => 4, "Name" => "Mark", "Age" => "18", "Roll No:" => "04", "Standard" => "5th"],
    ["ID" => 5, "Name" => "Denly", "Age" => "14", "Roll No:" => "05", "Standard" => "7th"],
    ["ID" => 6, "Name" => "Markpilier", "Age" => "16", "Roll No:" => "06", "Standard" => "8th"],
    ["ID" => 7, "Name" => "Orton", "Age" => "10", "Roll No:" => "07", "Standard" => "13th"],
    ["ID" => 8, "Name" => "Ambrose", "Age" => "15", "Roll No:" => "08", "Standard" => "11th"],
    ["ID" => 9, "Name" => "Kane", "Age" => "20", "Roll No:" => "09", "Standard" => "7th"],
    ["ID" => 10, "Name" => "Ramos", "Age" => "19", "Roll No:" => "10", "Standard" => "2nd"]
];
if(!empty($students)){
$headers = array_keys($students[0]);
echo "<table border=1>";
echo "<tr>";
foreach($headers as $header){
echo "<th>". htmlspecialchars($header) ."</th>";
}
echo "</tr>";
foreach($students as $student){
    echo "<tr>";
    foreach($student as $value){
        echo "<td>". htmlspecialchars($value) ."</td>";
    }
    echo "<tr>";
}
echo "</table>";
}
?>
</body>
</html>