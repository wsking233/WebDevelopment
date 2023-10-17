<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Perfect Palindrome</title>
</head>

<body>
    <h1>Lab03 Task 3 - Practicing the use of regular expressions(Extra Challenge)</h1>
    <hr />
    <form action="standardpalindromeself.php" method="post">
        <p>String:<input type="text" name="input_str" /></p>

        <p><input type="submit" value="Check for Perfect Palindrome" /></p>
    </form>
    <hr>

    <?php
    if (isset($_POST["input_str"])) {
        $str = $_POST["input_str"];
        $pattern = "/[^A-Za-z]/";
        $temp = preg_replace($pattern, '', $str);
        $lower_str = strtolower($temp);
        $revers_str = strrev($lower_str);

        echo "<p>The original text is: ", $str, "</p>";
        echo "<p>The lower case is: ", $lower_str, "</p>";
        echo "<p>In back order is: ", $revers_str, "</p>";

        if (strcmp($lower_str, $revers_str) == 0) {
            echo "<p>The  text you entered \"", $str, "\" is a perfect palindrome</p>";
        } else {
            echo "<p>The  text you entered \"", $str, "\" is NOT a perfect palindrome</p>";
        }
    } else {
        echo "<p>Please enter string from the input form.</p>";
    }
    ?>

    <hr />
</body>

</html>