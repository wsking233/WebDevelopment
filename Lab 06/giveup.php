<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Guessing Game</title>
</head>
<body>
    <h1>Guessing Game</h1>
<?php
    session_start();
    $num = $_SESSION["number"];
    echo "The hidden number was: $num";
    $SESSION["number"] = array();
    session_destroy();
?>
<p><a href = "startover.php">Start Over</a></p>
</body>
</html>