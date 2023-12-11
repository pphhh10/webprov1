<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate username
  if (empty($_POST["username"])) {
    $errors[] = "Username is required.";
  } else {
    if (strlen($_POST["username"]) < 3) {
      $errors[] = "Username must be at least 3 characters.";
    }
    // Check if username already exists in database (implement your database connection here)
    // if (usernameExists($_POST["username"])) {
    //   $errors[] = "Username already exists.";
    // }
  }

  // Validate email
  if (empty($_POST["email"])) {
    $errors[] = "Email is required.";
  } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
  }

  // Validate password
  if (empty($_POST["password"])) {
    $errors[] = "Password is required.";
  } else if (strlen($_POST["password"]) < 8) {
    $errors[] = "Password must be at least 8 characters.";
  }

  // If no errors, register user (implement your database connection and user registration logic here)
  if (empty($errors)) {
    // Register user and redirect to another page
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
</head>
<body>
  <?php if (!empty($errors)): ?>
    <ul class="errors">
      <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <a href="SignUp.php">Back</a>
</body>
</html>
