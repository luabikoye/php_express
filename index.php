<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 40px;
    }
    .container {
      max-width: 400px;
      background-color: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
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

<div class="container">
  <h2>Registration Form</h2>
  <form action="submit-form.php" method="post">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname">

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone">

    <label for="address">Address</label>
    <textarea id="address" name="address" rows="3"></textarea>

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
