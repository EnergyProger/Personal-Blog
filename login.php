<?php include('path.php'); ?>
<?php include(ROOT_PATH.'./app/controllers/users.php');
  guestOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/social-media-circle-long-shadow/1024/long-4-512.png" type="image/x-icon"/>
  <title>Login</title>
</head>
<body>
  <!-- Header -->
<?php include(ROOT_PATH.'/app/includes/header.php'); ?>
<!-- Header -->
  <div class="auth-content">
    <form action="login.php" method="post">
      <h3 class="form-title">Login</h3>
      <?php include(ROOT_PATH.'./app/helpers/formErrors.php'); ?>
     
      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn">Login</button>
      </div>
      <p class="auth-nav">Or <a href="register.php">Sign Up</a></p>
    </form>
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>