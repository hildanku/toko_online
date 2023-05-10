	<?php
	require 'conf.php';

	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$uname = mysqli_real_escape_string($conn, $_POST['username']);
		$pword = mysqli_real_escape_string($conn, $_POST['password']);

		$sql = "SELECT * FROM users WHERE username= '$uname' AND password = '$pword'";
		$query = mysqli_query($conn, $sql);

		$check = mysqli_num_rows($query);
		if ($check > 0) {
			// ambil data users
			$ambildata = mysqli_fetch_assoc($query);
			$_SESSION['name'] = $ambildata;
			// set session 
			$_SESSION['is_login']  = true;

			header("location: admin/index.php");
		} else {
			echo "Email atau password yang anda masukkan salah";
		}
	} else {
		return "Anda tidak di ijinkan";
	}
	// https://kodingin.com/cara-membuat-login-sederhana-dengan-php-dan-mysql/