<?php

if($_POST["submit"]) {
	$recipient="your@email.address";
	$contact_name=$_POST["contact_name"];
	$contact_email=$_POST["contact_email"];
	$contact_message=$_POST["contact_message"];

$mailBody="Name: $contact_name\nEmail: $contact_email\n\n$contact_message";

mail($recipient, $mailBody, "From: $contact_name <$contact_email>");

}
?>
