<?php 
print "Name: "; 
print $_POST["name"];
print "<br/>";
print "Email: ";
print $_POST["email"];
print "<br/>";
print "Content: " . $_POST["content"];

$requiredFields = array(
		"name"=>"Name",
		"email"=>"Email",
		"content"=>"Content"
); //associated array

//loop
foreach($requiredFields as $key=>$value) {
	if(empty($_POST[$key])) {
		die($value." is requred");
	}
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	die("Invalid emailaddress");
}


$to      = 'jxiang@olivetuniversity.edu';
$subject = 'Contact From '.$_POST["email"];



$message = "Name: ".$_POST["name"];
$message .= "\nEmail: ".$_POST["email"];
$message .= "\nContent: ".$_POST["content"];


$headers = 'From: '.$_POST["email"] . "\r\n" .
		'Reply-To: '.$_POST["email"] . "\r\n" ;

mail($to, $subject, $message, $headers);

		//String