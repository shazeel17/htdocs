<?php 
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

$num = "";

if(isset($_POST['num'])){
    if ($_POST['num'] == 'C') {
        $num = "0";
    } else {
        $num = (isset($_POST['input']) ? $_POST['input'] :"") . $_POST['num'];
    }
} else {
    $num = isset($_POST['input']) ? $_POST['input'] : "";
}

if(isset($_POST['op'])){
    $cookie_value1 = $num;
    setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/" );

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time()+(86400*30),"/" );

    $num = "";
}

if(isset($_POST['equal'])){
    $num = isset($_POST['input']) ? $_POST['input'] : 0;
    switch($_COOKIE['op'])
    {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break; 
        case "-":
            $result = $_COOKIE['num'] - $num;
            break; 
        case "*":
            $result = $_COOKIE['num'] * $num;
            break; 
        case "/":
            if ($num != 0) {
                $result = $_COOKIE['num'] / $num;
            } else {
                $result = "Error"; 
            }
            break;
        default:
            $result = $num;
    }
    $num = $result;
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Calculator </title>
    <style>
        
    </style>
</head>
<body>
    

<form class="maininput" action="" method="post"> 

<input type="text" name="input" class="maininput" value="<?php echo @$num ?>" readonly><br>
<input type="submit" name="num" id="" value=9>
    <input type="submit" name="num" id="" value=8>
    <input type="submit" name="num" id="" value=7>
    <input type="submit" name="op" id="" value="+"><br>
    <input type="submit" name="num" id="" value=6>
    <input type="submit" name="num" id="" value=5>
    <input type="submit" name="num" id="" value=4>
    <input type="submit" name="op" id="" value="-"><br>
    <input type="submit" name="num" id="" value=3>
    <input type="submit" name="num" id="" value=2>
    <input type="submit" name="num" id="" value=1>
    <input type="submit" name="op" id="" value="*"><br>
    <input type="submit" name= "num" id="" value = "C"> 
    <input type="submit" name="op" id="" value="/">
    <input type="submit" name="num" id="" value=0>
    <input type="submit" name="equal" id="" value="=">
    </form>
 
</body>
</html>
