<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <form action="process.php" method="GET">
        <label for="numbers">Enter integers (comma-separated):</label><br>
        <input type="text" id="numbers" name="numbers" placeholder="e.g., 3,5,7,9" required><br><br>
        <label for="threshold">Enter threshold:</label><br>
        <input type="number" id="threshold" name="threshold" placeholder="e.g., 4" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

