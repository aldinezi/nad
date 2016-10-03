<?php
	$EmailFrom = $_REQUEST['email'];
	$EmailTo = "aldinezi@gmail.com";
	$Subject = "New e-mail from your NAD Clinic website.";
	$Name=$_REQUEST['name'];
	$Email=$_REQUEST['email'];
	$Phone=$_REQUEST['phone'];
	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $Name;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $Email;
	$Body .= "\n";
	$Body .= "Phone: ";
	$Body .= $Phone;
	$Body .= "\n";
	 mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
?>