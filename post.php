<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$uname = "admin";
		$pwd   = "admin#1234";

		if (isset($_POST['uid']) == $uname && $_POST['passwd'] == $pwd) {
			echo "Working!";
		} else {
			echo "Failed °_°";
		}

	}

?>

<form action="" method="POST">
	<input type="text" name="uid">
	<input type="password" name="passwd">
	<input type="submit" value="submit" name="submit">
</form>
