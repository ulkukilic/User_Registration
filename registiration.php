<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
    if (isset($_POST['create'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
         $email = $_POST['email'];
         $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];
        echo $firstname . $lastname . $email . $phonenumber . $password ;
    }
  ?>

  <div class="container">
    <form action="registration.php" method="post">
      <h1>Registration</h1>
      <p>Fill up the form with correct values</p>

      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" required>

      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" required>

      <label for="email">Email Address</label>
      <input type="email" name="email" id="email" required>

      <label for="phonenumber">Phone Number</label>
      <input type="tel" name="phonenumber" id="phonenumber" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>

      <input type="submit" name="create" value="Sign Up">
    </form>
  </div>
</body>
</html>
