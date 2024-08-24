<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .result {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .result label {
            font-weight: bold;
        }
        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Submission Result</h1>
        <div class="result">
            <?php 
            if(isset($_POST['name'])) {
                echo "<p><strong>User Name:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
                echo "<p><strong>User Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
                echo "<p><strong>User Password:</strong> " . htmlspecialchars($_POST['password']) . "</p>";
                echo "<p><strong>User Skills:</strong> " . htmlspecialchars(implode(", ", $_POST['skills'])) . "</p>";
                echo "<p><strong>User Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
                echo "<p><strong>User City:</strong> " . htmlspecialchars($_POST['city']) . "</p>";
                echo "<p><strong>User Bio:</strong> " . htmlspecialchars($_POST['bio']) . "</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
