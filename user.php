<!DOCTYPE html>
<html>
<head>
    <title>Browser Information</title>
</head>
<body>
    <h1>Browser Information</h1>
    <?php
    // Get user's browser information
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Display the browser information
    echo "<p>Your browser information:</p>";
    echo "<pre>$user_agent</pre>";
    ?>
</body>
</html>
