<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$phone_len = strlen($phone);


if(!$firstname)
{
    $error ='Please enter firstname';
   include('register.php');
   exit;
}


if(!$lastname)
{
    
    $error ='please enter lastname';
   include('register.php');
   exit;
}

if(!$phone)
{
    
    $error ='Enter a valid phone number';
   include('register.php');
   exit;
}

if($phone_len != 11)
{
    
    $error ='Incorrect mobile number entered';
   include('register.php');
   exit;
}


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

include('thankyou.php');


?>