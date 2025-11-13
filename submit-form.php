<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$content =  "\n\n************************\n"
            .'New registration '."\n"
            ."************************\n"
            .'Firstname: '.$firstname."\n"
            .'Lastname: '.$lastname."\n"
            .'Email: '.$email."\n"
            .'Phone: '.$phone."\n"
            .'Address: '.$address."\n";

//open a file and wrote the content into it.
$file = fopen('data.txt','a');
fwrite($file,$content);
fclose($file);


echo "<h2>Welcome $firstname!</h2>";

echo '<br>';

echo 'Your application has been received.';

?>