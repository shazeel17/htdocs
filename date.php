<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .date-time {
            font-size: 2em;
            color: #333;
        }
        .label {
            font-size: 1.2em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="date-time">
            <div class="label">Current Date:</div>
            <?php
            date_default_timezone_set("Asia/Karachi");
            echo date("D-M-Y");
            ?>
        </div>
        <br>
        <div class="date-time">
            <div class="label">Current Time:</div>
            <?php
            echo date("h:i:sa");
            ?>
        </div>
        <br>
        <div class="date-time">
            <div class="label">Current Seconds:</div>
            <?php
            echo date("s");
            ?>
        </div>
    </div>
</body>
</html>
