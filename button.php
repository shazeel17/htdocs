<?php 
if(isset($_REQUEST['button'])){
    btn_click();
}
function btn_click(){
    echo "Function called when button clicked";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call a Function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">Call a Function</button>
    </form>
</body>
</html>
