<?php 
$conversionRates = [
    'USD' => ['PKR' => 280 ],
    'PKR' => ['USD' => 0.0036]
];

$result = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
    $fromCurrency = isset($_POST['from']) ? $_POST['from'] : 0;
    $toCurrency = isset($_POST['to']) ? $_POST['to'] : 0;
 }

   
 if($amount > 0 && $fromCurrency && $toCurrency){
    if ($fromCurrency == $toCurrency){
        $result = 'No conversion needed amount: '. number_format($amount,2) . $fromcurrency;
    }else{
        if(isset($conversionRates[$fromCurrency][$toCurrency])){
            $conversionRates = $conversionRates[$fromCurrency][$toCurrency];
            $convertedAmount = $amount*$conversionRates;
            $result = number_format($amount,2) . " " . $fromCurrency . "is equal to" . number_format($convertedAmount,2) . " ". $toCurrency;
        }else{
            $result = 'Conversion rate not available.';
        }
    }
 }else{
    $result = 'Please enter a valid amount and provide both currencies';
 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
        .result b {
            display: inline-block;
            padding: 10px 20px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 6px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Currency Converter</h1>
        <form action="converter.php" method="post">
            <div class="form-group">
                <label for="amount">Enter Amount:</label>
                <input type="text" name="amount" id="amount" placeholder="Enter amount" required>
            </div>
            <div class="form-group">
                <label for="from">Convert From:</label>
                <select name="from" id="from" required>
                    <option value="">Select Currency</option>
                    <option value="USD">USD</option>
                    <option value="PKR">PKR</option>
                </select>
            </div>
            <div class="form-group">
                <label for="to">Convert To:</label>
                <select name="to" id="to" required>
                    <option value="">Select Currency</option>
                    <option value="USD">USD</option>
                    <option value="PKR">PKR</option>

                </select>
            </div>
            <input type="submit" name="convert" value="Convert Currency">
        </form>
        <div class="result">
            <?php
            if ($result) {
                echo "<b>" . htmlspecialchars($result) . "</b>";
            }
            ?>
        </div>
    </div>
</body>
</html>
