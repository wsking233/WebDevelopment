<!--file data.php -->
<!-- <script>
	function showMessage(text){
		alert(text);
	}
</script> -->

<?php
	// get name and password passed from client
	$name = $_GET['namefield'];
	$pwd = $_GET['pwdfield'];

	$host = "cmslamp14.aut.ac.nz";
    $user = "xwg1585";
    $pswd = "ws@king88888";
    $dbnm = "xwg1585";	

	$sql = "select * from lab07 where name = '$name'";

	$conn = new mysqli($host, $user, $pswd, $dbnm);

    if ($conn->connect_error) {
        die("connect failed: " . $conn->connect_error);
        echo "<p>connect failed!</p>";
    } else {
        // echo "alert(database connected: ",$dbnm,")";
		// $message = "database connected: ".$dbnm;
		// echo "<script> showMessage($message); </script>";

		$result = mysqli_query($conn, $sql);
		
		$num_rows = mysqli_num_rows($result);

		$row = mysqli_fetch_assoc($result);

		echo $num_rows." result(s) found:<br>";


		if($num_rows != null){
			if($pwd == $row["pwd"]){
				echo "Email: ".$row["email"];
			}else{
				// echo "<script>alert(\"Wrong password\")</script>";
				echo "Wrong password";

			}
		}else{
            // echo "<script>alert(\"No result was found!\")</script>";
			echo "No result was found!";
		}
		mysqli_free_result($result);
    }

	mysqli_close($conn);

	

	// sleep for 10 seconds to slow server response down
	// sleep(10);
	// write back the password concatenated to end of the name
	// echo ($name." : ".$pwd)
?>