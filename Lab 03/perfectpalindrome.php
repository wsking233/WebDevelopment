<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Perfect Palindrome</title>
</head>

<body>
    <h1>Lab03 Task 2 - Perfect Palindrome</h1>
    <hr />
    <?php
    if (isset($_POST["input_str"])) {
        $str = $_POST["input_str"];
        $pattern = "/^[A-Za-z]+$/";
        $ans = "";
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++) {
            $letter = substr($str, $i, 1);
            if (preg_match($pattern, $str[$i])) {
                $ans = $ans . $letter;
            }
        }
        $lower_str = strtolower($ans);
        $revers_str = strrev($lower_str);

        // echo "<p>The original text is: ",$str,"</p>";
        // echo "<p>The lower case is: ",$lower_str,"</p>";
        // echo "<p>In back order is: ",$revers_str,"</p>";

        if(strcmp($lower_str, $revers_str) == 0){
            echo "<p>The  text you entered \"",$str,"\" is a perfect palindrome</p>";
        }else{
            echo "<p>The  text you entered \"",$str,"\" is NOT a perfect palindrome</p>";
        }

    } else {
        echo "<p>Please enter string from the input form.</p>";
    }
    ?>

    <hr />
</body>

</html>