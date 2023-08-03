
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['phone'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$phone = validate($_POST['phone']);


	if (empty($phone)) {
		header("Location: login.php?error=phone number  is required");
		exit();
	}  
	elseif (!preg_match('/^\d{10}$/', $phone)) {
		header("Location: login.php?error=Invalid phone number");
		exit();
	}
    else {
		// hashing the password
		// $pass = md5($pass);


		$sql = "SELECT * FROM users WHERE phone='$phone' ";

		$result = mysqli_query($conn, $sql);


		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			// print_r($row);
			
		



				if ($row['phone'] === $phone ){
					$_SESSION['phone'] = $row['phone'];
				
				
					// Determine the user's role (you need to have a 'role' column in your database table)
					$role = $row['role'];
				
					header("Location: otp.php"); // Redirect to the admin home page
					exit();

					// if ($role === 'user') {
					// 	header("Location: otp.php"); // Redirect to the admin home page
					// 	exit();
					// } elseif ($role === 'admin') {
					// 	header("Location: hod.php"); // Redirect to the faculty home page
					// 	exit();
					// } 
					//  else {
					// 	header("Location: login.php?error=Unknown role"); // Redirect to a generic error page if the role is unknown
					// 	exit();
					// }
				}
			}
			else{ 
				$insertSql = "INSERT INTO users (phone) VALUES ('$phone')";
				$insertResult = mysqli_query($conn, $insertSql);
				if ($insertResult) {
					header("Location: otp.php");
					exit();
				}
			}
		}

		
	}


	