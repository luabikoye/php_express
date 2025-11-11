<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$firstname = 'lu';

$age = 'false';

$lastname = 'abikoye';

$fullname = $firstname." ".$lastname;

$content = "I'm ".$fullname." by name and I am ".$age." years old";

echo $content;

echo '<br>';

echo strlen($firstname);

echo '<hr>';

echo ucwords($fullname);
?>

</body>
</html>