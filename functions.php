<?php

function checkMail($email){
	$email_error = true;
	if (!str_contains($email, "@") || !str_contains($email, ".")) {
		$email_error = false;
	}
	return $email_error;
}
?>
