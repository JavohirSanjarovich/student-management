<?php

error_reporting(0);

session_start();

session_destroy();

if ($_SESSION['message']) {
  $message = $_SESSION['message'];

  echo "<script type='text/javascript'>

      alert('$message');

    </script>";

}

$host = "localhost";

$user = "root";

$password = "root";

$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data, $sql);



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Student Management Sistem</title>
  <link rel="stylesheet" href="style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <!-- W-School part -->
    <label class="logo">W-School</label>

    <ul style="float:right;">
      <li><a href="">Home</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Admission</a></li>
      <li><a href="login.php" class="btn btn-success">Login</a></li>
    </ul>
  </nav>

  <div class="section1">
    <label class="img_text"> We Teach Students With Care</label>
    <img class="main_img" src="project_Image/school_management.jpg">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="welcome_img" src="project_Image/school2.jpg">
      </div>
      <div class="col-md-8">
        <!-- Welcome to W-School -->
        <h1>Welcome to W-School</h1>
        <p>
          1. In each season there are a number of serious projects with deadlines from 1 day to 3 months. Students must decide within the given requirements and limitations of software development problems. For example, it was proposed to create student management programs tasks, including tasks such as creating tags (tags), authorization and the main client interface.
          2. Students participate in weekly coding assignments. 1-5 times. It is an integral part of the learning process. Our program provides access and codes to each student, and their entries are automatically sorted. It contains more than 800 exercises with thousands of tests.
          3. In the ASTRUM Academy, role-playing techniques are used to develop skills in various business situations, such as business negotiations, discussions and conflict management. Facilitating job interviews is a great way for students to take on the role of respondent and interviewer. It is used for two-way simulation to see the training of good interviewers from a professional point of view
        </p>
      </div>
    </div>
  </div>
  <!-- Our Teachers -->
  <center>
    <h1>Our Teachers</h1>
  </center>
  <div class="container">
    <div class="row">

      <?php
      
        while ($info = $result ->fetch_assoc())

        {
      
      ?>

          <div class="col-md-4">
            <img class="teacher" src="<?php echo "{$info['image']}" ?>">

            <h3><?php echo "{$info['name']}" ?></h3>

            <h5><?php echo "{$info['description']}" ?></h5>


          </div>

      <?php

        }

      ?>
          <!-- <div class="col-md-4">
            <img class="teacher" src="project_Image/teacher2.jpg">
            <p>Oprah was clever. She could read before she was three. When she was 17, she received a scholarship to Tennessee State University, where she studied drama. She also started reading the news at the local radio station.</p>
          </div>
          <div class="col-md-4">
            <img class="teacher" src="project_Image/teacher3.jpg">
            <p>Later films became longer and were often Bible stories. Until 1910 the actors were not named. With the longer films their names started to appeilr on screen. The idea of 'film stars' was born: .</p>
          </div> -->
    </div>
  </div>
  <!--  -->
  <center>
    <h1>Our Co urses</h1>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="teacher" src="project_Image/web.jpg">
        <h2>Web Developer</h2>
      </div>
      <div class="col-md-4">
        <img class="teacher" src="project_Image/graphic.jpg">
        <h2>Graphics Designer</h2>
      </div>
      <div class="col-md-4">
        <img class="teacher" src="project_Image/marketing.png">
        <h2>Marketing</h2>
      </div>
    </div>
  </div>
  <center>
    <h1 class="adm">Admission Form</h1>
  </center>
  <div align="center" class="admission_form">
    <form action="data_check.php" method="POST">
      <div class="adm_int">
        <label class="label_text" for="">Name</label>
        <input class="input_deg" type="text" name="name" id="name" placeholder="Name">
      </div>
      <div class="adm_int">
        <label class="label_text" for="">Email</label>
        <input class="input_deg" type="text" name="email" id="email" placeholder="Email">
      </div>
      <div class="adm_int">
        <label class="label_text" for="">Phone</label>
        <input class="input_deg" type="number" name="phone" id="phone" placeholder="Phone">
      </div>
      <div class="adm_int">
        <label class="label_text" for="">Message</label>
        <textarea class="input_txt" name="message"></textarea>
      </div>
      <div class="adm_int">

        <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
      </div>
    </form>
  </div>
  <footer>
    <h3 class="footer_text">All @copyright reserved by web tech knowledge</h3>
  </footer>
</body>

</html>