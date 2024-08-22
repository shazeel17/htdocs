<?php 
if (isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
    $myfile = fopen($file, "r") or die("Unable to read file");
    echo "<pre>" . htmlspecialchars(fread($myfile, filesize($file))) . "</pre>";
    fclose($myfile);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Reader</title>
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
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        input[type="file"] {
            margin: 1rem 0;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        pre {
            text-align: left;
            white-space: pre-wrap;
            word-wrap: break-word;
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 4px;
            margin-top: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload and Read File</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" accept=".txt,.csv,.json,.xml" required>
            <br>
            <button type="submit">Read File</button>
        </form>
    </div>
</body>
</html>
