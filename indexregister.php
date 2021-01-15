<?php
include "cekregis.php";
include "koneksi.php";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pengaduan 2017</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
 <style>
 .war
 {
    color : red;
 }
 </style>
<div class="pen-title">
  <h1>Pengaduan 2017</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Create an account</h2>
  <form method="post" action="" enctype="multipart/form-data"><?php echo "<label class='war'>.$gagalnama.</label>"; ?>
      <input name="nama" type="text" placeholder="Username"/> <?php echo "<label class='war'>.$emailEx.</label>"; ?>  
      <input name="email" type="text" placeholder="Email Address"/>   <?php echo "<label class='war'>.$gagalpassword.</label>"; ?>  
      <input name="editpass" type="password" placeholder="Password"/>   <?php echo "<label class='war'>.$md5Ex.</label>"; ?>
      <input name="editverpass" type="password" placeholder="verivikasi password"/>

      <button type="submit">Register</button>
    </form>
  </div>
  <div class="cta"><a href="index.php">Sign In</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
