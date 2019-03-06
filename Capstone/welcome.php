<?php require_once "config/session_config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Graduation, The Fastest Option</title>
  <!-- Favicon -->
  <link href="images/lock.png" rel="icon">
  <!-- CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="mybackground">
  <div class="container-fluid">
    <div class="elementToFadeIn">
      <div class="myContainerIndex">  
        <div class="row">
            <div class="col-md-12">
               <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the Gradution, The Fastest Option system.</h1>
               <p>
                    <a href="reset.php" class="btn btn-warning">Reset Your Password</a>
                    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>