<?php

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$address =  $_POST['address'];

$phone_length = strlen($phone);


if($firstname == '')
{
    echo 'Please enter your firstname. <a href="contact.php">Go back</a>';
    exit;
}


if($lastname == '')
{
    echo 'Please enter your lastname. <a href="contact.php">Go back</a>';
    exit;
}


if($email == '')
{
    echo 'Please enter your email. <a href="contact.php">Go back</a>';
    exit;
}


if($phone_length != 11)
{
    echo 'Please enter a valid GSM number. <a href="contact.php">Go back</a>';
    exit;
}


$to = 'luabikoye@yahoo.com';
$subject = 'Customer Contact 4rm Aledoy';
$content = 'Below are the information that was submitted on the website'."\n"
.'Firstname: '.$firstname."\n"
.'Lastname: '.$lastname."\n"
.'Email: '.$email."\n"
.'Phone: '.$phone."\n"
.'Address: '.$address."\n\n";

$header = "From: noreply@aledoy.com";

mail($to,$subject,$content,$header);


$file = fopen('data.txt', 'a');
fwrite($file, $content);
fclose($file);


echo '<h2>Thank you '.$firstname.'</h2>';

echo '<p>A representative of our company will contact you within the next 24 hours.</p>';

?>