<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: dashboard.php");
  }
?>

<?php include_once "header.php"; ?>
<body style="background-color: #00b8ff;">
  <div class="wrapper">
    <section class="form login">
      <header>Counselor Log In</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Log In" style="background-color: #2b5480;">
        </div>
      </form>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
