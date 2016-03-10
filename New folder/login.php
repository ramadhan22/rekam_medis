<?php 
  include 'include/koneksi.php';
  if (isset($_SESSION['nama'])) {
    header("location:index.php");
  } else if ($_POST) {
    $username = $_POST['username'];
    $password = sha1(md5($_POST['password']));
    $query = mysql_query("SELECT * FROM tb_user WHERE `username` = '$username' AND `password` = '$password'");
    while ($row = mysql_fetch_array($query)) {
      
      $_SESSION['nama']     = $row['nama'];
      $_SESSION['kd_user']  = $row['kd_user'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['level']    = $row['level'];
    }
    header("location:index.php");
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <form action="login.php" method="post" class="form-signin">
      
        <h2 class="form-signin-heading" align="center">Login</h2>

        <label for="inputusername" class="sr-only">Username</label>
        <input type="username" name="username" id="inputusername" class="form-control" placeholder="Username"  autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
