<?php

$img = array('1.jpg','2.jpg','3.jpg','4.jpg');

shuffle($img);

$image = $img[0];



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>

    <link rel="stylesheet" href="style.css"></link>
  <style>
   
    input, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<?php include('inc/header.inc'); ?>

<div class="clear"></div>

<div class="container" style="width: 400px;">
  <h2>Registration Form</h2>

  <?php 
  if(isset($error))
  {
    echo '<div class="error">'.$error.'</div>';
  }
  ?>

  <form action="submit-form.php" method="post">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" value="<?php if(isset($firstname)) { echo $firstname; } ?>">

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" value="<?php if(isset($lastname)) { echo $lastname; } ?>">

    <label for="email">Email</label>
    <input type="email" id="email" name="email"  value="<?php if(isset($email)) { echo $email; } ?>">

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone"  value="<?php if(isset($phone)) { echo $phone; } ?>">

    <label for="address">Address</label>
    <textarea id="address" name="address" rows="3"><?php if(isset($address)) { echo $address; } ?></textarea>

    <button type="submit">Submit</button>
  </form>

 <img src="images/<?php echo $image; ?>" style="width:100%;">
</div>

<div class="clear"></div>

<div class="container">
    <?php include('inc/footer.inc'); ?>

   </div>
</body>
</html>
