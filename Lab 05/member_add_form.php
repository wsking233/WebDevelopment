<html>

<head>
    <meta http-equiv="content-type" content="text/html" ; charset="utf-8" />
    <title>VIP Member Registration system</title>
</head>

<body>
    <h1>Web Development - Lab05</h1>
    <hr>
    <p><a href="./member_add_form.php">Add New Member Form</a></p>
    <p><a href="./member_display.php">Display All Members Page</a></p>
    <p><a href="./member_search.php">Search Member Page</a></p>
    <hr>

    <h2>New Member Registration</h2>
    <div>
        <form action="./member_add.php" method="post">
            <p>First Name: <input type="text" name="fname"></p>
            <p>Last Name: <input type="text" name="lname"></p>
            <p>Gender: <input type="radio" name="sex" value="m">Male 
                        <input type="radio"name="sex" value="f">Female</p>
            <p>Email: <input type="text" name="email"></p>
            <p>Phone: <input type="text" name="phone"></p>
            <p><input type="submit" value="submit" ></p>
        </form>
    </div>

</body>

</html>            