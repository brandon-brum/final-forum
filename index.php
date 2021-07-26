<!DOCTYPE HTML>
<?php
echo strlen(uniqid("UID", true));
$servername = "localhost";
$username = "root";

try {
	$conn = new PDO("mysql:host=$servername;dbname=test", $username);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

$sql = 'SELECT testVal FROM testTable';
foreach ($conn->query($sql) as $row) {
	print $row['testVal'] . "\t";
}

?>

<HTML lang="en">
<HEAD>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home - FinalForum</title>
	<link rel="stylesheet" type="text/css" href="/FinalForumstyles/reset.css">
	<link rel="stylesheet" type="text/css" href="/FinalForumstyles/base.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="/FinalForum/styles/header.css">
</HEAD>
<BODY>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/FinalForum/includes/header.php' ?>
	<main>
		<div id='pattern'>
			<div id="text">
				<h1>The Last Forum,<br>Ever.</h1><br>
				<p><span>Designed by Internet Nerds, for Internet Nerds.</span></p>
			</div>
			<div id="login">
				<p id="loginHeader">Login</p>
				<hr>
				<form>
					<label>Username:</label>
					<input type="text" id="username" name="username">
					<label>Password:</label>
					<input type="password" id="password" name="password"><br>
					<input type="submit" id="submit" value="Log In">
				</form>
				<br>
				<a href="register">Don't have an account? Register here.</a>
			</div>
		</div>
	</main>
</BODY>
</HTML>
