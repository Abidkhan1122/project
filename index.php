<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello php</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to My PHP project  8888</h1>
        <p><?php echo "Current date is: " . date ('Y-m-d'); ?></p>
        
        <form method="post" action="index.php">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="Submit">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            echo "<p>Hello, " . $name . "!</p>";
        }
        ?>
    </div>
</body>
</html>
