<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="style.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body background="project_image/school2.jpg" class="body_deg">

  <!-- Login part -->
  <center>

    <div class="form_deg">

      <centent class="title_deg">
        Login Form

        <h4>
          <?php

          error_reporting(0);

          session_start();

          session_destroy();

          echo $_SESSION['loginMassage'];

          ?>
        </h4>
      </centent>

      <form action="login_check.php" method="POST" class="login_form">

        <div>
          <label class="label_deg">Username</label>
          <input type="text" name="username">
        </div>

        <div>
          <label class="label_deg">Password</label>
          <input type="password" name="password">
        </div>

        <div>
          <input class="btn btn-primary" type="submit" name="submit" value="Login">
        </div>

      </form>

    </div>

  </center>

</body>

</html>