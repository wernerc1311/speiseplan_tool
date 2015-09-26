<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'angemeldet';
} else {
    $logged = 'abgemeldet';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" action="includes/process_login.php" method="post" name="login_form">
        <h2 class="form-signin-heading">Bitte anmelden</h2>
        <h4 class="form-signin-heading">Sie sind gerade <?php echo $logged ?>!</h4>
        <input type="text" name="email" class="input-block-level" placeholder="E-Mail-Adresse">
        <input type="password" name="password" id="password" class="input-block-level" placeholder="Passwort">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">Zugangsdaten Merken
        </label>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Fehler beim Anmelden!</p>';
        }
       ?>
        <button class="btn btn-large btn-primary" onclick="formhash(this.form, this.form.password);" type="submit">Anmelden</button>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>