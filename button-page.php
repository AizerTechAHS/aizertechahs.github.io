<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Page</title>
</head>
<body>

    <button onclick="goToAnotherPage()">Click me to go to another page</button>

    <script>
        function goToAnotherPage() {
            window.location.href = 'redirect.php';
        }
    </script>

</body>
</html>