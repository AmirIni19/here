<!DOCTYPE html>
<html>

<head>
	<title>اطلاعات فرم</title>
</head>
<link rel="stylesheet" href="css/style.css">

<body>
	<center style="
	    width: 100%;
	    height: 80vh;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;
	">
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$nationality = $_REQUEST['nationality'];
		$national_code = $_REQUEST['national_code'];
		$position = $_REQUEST['position'];
		$email = $_REQUEST['email'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$username',
			'$nationality','$national_code','$position','$email')";

		if (mysqli_query($conn, $sql)) {
			echo "<h2> اطلاعات شما به درستی ذخیره شد و کارت شما به زودی صادر می شود "
				. " </h2>";

			echo nl2br("\n$username\n $nationality\n "
				. "$national_code\n $position\n $email");
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>