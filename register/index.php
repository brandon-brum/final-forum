<!DOCTYPE HTML>

<?php
if ($_POST['username']) {
	$servername = "localhost";
	$username = "root";
	$dbname = "finalforum";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	$sql = 'SELECT testVal FROM testTable';
	foreach ($conn->query($sql) as $row) {
		print $row['testVal'] . "\t";
	#}
}
?>

<HTML lang="en">
<HEAD>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - FinalForum</title>
	<link rel="stylesheet" type="text/css" href="/FinalForum/styles/reset.css">
	<link rel="stylesheet" type="text/css" href="/FinalForum/styles/base.css">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" type="text/css" href="/FinalForum/styles/header.css">
</HEAD>
<BODY>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/FinalForum/includes/header.php' ?>
	<main>
		<h1>Register</h1>
		<hr>
		<div id="register">
		<form method="post">
			<label>Username:</label>
			<input type="text" id="username" name="username"><br><br>
			<label>Password:</label>
			<input type="password" id="password" name="password">
			<label>Confirm Password:</label>
			<input type="password" id="password" name="password"><br>
			<input type="submit" id="submit" value="Register">
		</form>
		</div>
	</main>
</BODY>
</HTML>
