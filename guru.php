<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	$conn = new mysqli ("localhost", "root", "", "rdx") or die("unable to connect mysql");
	if ($conn) {
		echo "connected successfully";
	}

echo"PHP page<br>";
//echo"Entered Username:$Username<br>";
//echo"Entered Password:$Password<br>";
/* 
$sql_stmt = "INSERT INTO login (username, password) VALUES ('$Username', '$Password')";
if ($conn->query($sql_stmt) === TRUE) {
    echo "New row inserted successfully.";
} else {
    echo "Error: " . $sql_stmt . "<br>" . $conn->error;
} */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check user credentials
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Successful login
        session_start();
        $_SESSION["email"] = $email;
        header("location: welcome.php"); // Redirect to a welcome page
    } else {
        // Invalid login
        echo "Invalid username or password.";
    }
}

$conn->close();

?>
</body>
</html>

