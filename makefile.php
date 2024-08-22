<?php 
if(isset($_POST['filename'])){
    $filename = "files/" . basename($_POST['filename']); // Using basename to avoid directory traversal attacks
    $content = $_POST['content'];
    $file = fopen($filename, "w") or die('Unable to create the file');
    fwrite($file, $content);
    fclose($file);
    echo "<p>File Created: <strong>" . htmlspecialchars($filename) . "</strong></p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }
        h1 {
            margin-top: 0;
            font-size: 1.5rem;
            color: #007BFF;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        button {
            background-color: #007BFF;
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            margin: 0;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 1rem;
            padding: 1rem;
            border-radius: 4px;
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a File</h1>
        <form action="" method="post">
            <input type="text" name="filename" placeholder="Enter your filename" required />
            <textarea name="content" placeholder="Enter your content here" required></textarea>
            <button type="submit">Create File</button>
        </form>
        <?php if (isset($_POST['filename'])): ?>
            <div class="message">
                File Created: <strong><?php echo htmlspecialchars($_POST['filename']); ?></strong>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
