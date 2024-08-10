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
    <title>Calculator</title>
    <style>
        body{
            background-color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calc{
            background-color: #333;
            border-radius: 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            width: 320px;
            padding: 20px;
        }
        .maininput{
            width: 100%;
            height: 70px;
            background-color: #222;
            color: #fff;
            font-size: 2.5rem;
            text-align: right;
            border: none;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        .button{
            width: 70px;
            height: 70px;
            margin: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .numbtn{
            background-color: #444;
            color: #fff;
        }
        .numbtn:hover{
            background-color: #555;
        }
        .calbtn{
            background-color: #f39c12;
            color: #fff;
        }
        .calbtn:hover{
            background-color: #e67e22;
        }
        .equal{
            background-color: #27ae60;
            color: #fff;
        }
        .equal:hover{
            background-color: #2ecc71;
        }
        .clear{
            background-color: #c0392b;
            color: #fff;
        }
        .clear:hover{
            background-color: #e74c3c;
        }
        .button-row {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <input type="text" name="input" class="maininput" value="<?php echo @$num ?>" readonly><br>
            <div class="button-row">
                <input type="submit" name="num" class="button numbtn" value="7">
                <input type="submit" name="num" class="button numbtn" value="8">
                <input type="submit" name="num" class="button numbtn" value="9">
                <input type="submit" name="op" class="button calbtn" value="+">
            </div>
            <div class="button-row">
                <input type="submit" name="num" class="button numbtn" value="4">
                <input type="submit" name="num" class="button numbtn" value="5">
                <input type="submit" name="num" class="button numbtn" value="6">
                <input type="submit" name="op" class="button calbtn" value="-">
            </div>
            <div class="button-row">
                <input type="submit" name="num" class="button numbtn" value="1">
                <input type="submit" name="num" class="button numbtn" value="2">
                <input type="submit" name="num" class="button numbtn" value="3">
                <input type="submit" name="op" class="button calbtn" value="*">
            </div>
            <div class="button-row">
                <input type="submit" name="num" class="button clear" value="C">
                <input type="submit" name="num" class="button numbtn" value="0">
                <input type="submit" name="equal" class="button equal" value="=">
                <input type="submit" name="op" class="button calbtn" value="/">
            </div>
        </form>
    </div>
</body>
</html>
