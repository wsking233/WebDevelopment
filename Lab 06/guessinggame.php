<?php
session_start();

if(!isset($_SESSION["number"])){
    $_SESSION["number"] = rand(1, 100);
}
if(!isset($_SESSION["gRemaining"])){
    $_SESSION["gRemaining"] = 0;
}

$num = $_SESSION["number"];
$gRemaining = $_SESSION["gRemaining"];
?>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Guessing Game</title>
</head>

<body>
    <h1>Guessing Game</h1>


    <?php
    echo "Enter a number between 1 and 100, then press the Guess button.";
    ?>

    <form action="guessinggame.php" method="POST">
        <p>Number: <input type="text" name="guess"></p>
        <input type="submit" value="Guess">
    </form>

    <?php
    $guess = $_POST["guess"];
    echo "$num<br>";
    if ($guess == $num) {
        echo "Congratulations! You guessed the hidden number.<br>";
    } else {
        $gRemaining ++;
        if ($guess > $num) {
            echo "Your guess is too high<br>";
        }
        if ($guess < $num) {
            echo "Your guess is too low<br>";
        }
    }
   
    echo "Number of guesses: $gRemaining";

    ?>

    <P><a href="giveup.php">Give Up</a></P>
    <p><a href="startover.php">Start Over</a></p>

</body>

</html>