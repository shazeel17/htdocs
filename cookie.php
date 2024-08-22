<?php 
setcookie('Fruit','Apple');
setcookie('Color','Red');

if(isset($_COOKIE['Fruit'])){
    echo "Current fruit is ". $_COOKIE['Fruit'];
}else{
    echo "no fruit set";
}

echo "<br>";


if(isset($_COOKIE['Color'])){
    echo "Current color is ". $_COOKIE['Color'];
}else{
   echo "no color set";
}

echo "<br>";

print_r($_COOKIE);
?>