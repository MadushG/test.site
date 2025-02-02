<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP with Inline CSS</title>
</head>
<body style="background-color: lightblue; text-align: center; font-family: Arial, sans-serif;">

    <h1 style="color: darkblue;">Welcome to My Webpage</h1>
    <p style="font-size: 18px; color: darkred;">This is a basic example of inline CSS with PHP.</p>

    <form method="POST">
        <button type="submit" name="submit" style="background-color: green; color: white; padding: 10px 20px; border: none; cursor: pointer;">
            Click Me
        </button>
    </form>

    <p style="font-size: 20px; font-weight: bold;">
        <?php
            if(isset($_POST['submit'])) {
                echo "Hello! This message is from PHP.";
            }
        ?>
    </p>

</body>
</html>
