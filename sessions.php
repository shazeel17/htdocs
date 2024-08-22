<?php
session_start();
if (isset($_POST['button'])) {
    if ($_POST['button'] == 'set') {
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
    }

    if ($_POST['button'] == 'get') {
        echo "<p>Session Value: " . htmlspecialchars($_SESSION['user'] ?? 'No value set') . "</p>";
    }

    if ($_POST['button'] == 'delete') {
        session_destroy();
        echo "<p>Session has been deleted.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            color: #333;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="user" placeholder="Enter user name" />
            <br>
            <button name="button" value="set">Set Session</button>
            <button name="button" value="get">Get Session</button>
            <button name="button" value="delete">Delete Session</button>
        </form>
    </div>
</body>
</html>
