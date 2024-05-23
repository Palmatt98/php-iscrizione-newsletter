<?php
var_dump(__DIR__);
include __DIR__ . "/functions.php";

session_start();
var_dump($_POST["email"]);

$email_correct = false;

if (isset($_POST["email"])) {
	$email = $_POST["email"];
	$email_correct = checkMail($email);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

	<form method="post" action="">
		<div class="container">
			<label for="email">Inserisci email</label>
			<input class="d-block my-4" type="text" name="email" id="email" />
			<span class="d-block text-danger "><?php echo $email_correct == false ? "Inserisci correttamente l'email" : "" ?></span>
			<button type="submit" class="btn btn-primary">Invia</button>
		</div>
	</form>

</body>

</html>