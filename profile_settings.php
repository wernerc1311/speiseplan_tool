<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>

<?php if (login_check($mysqli) == true) : ?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>BGV Admin Panel - Speiseplan</title>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">BGV Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo htmlentities($_SESSION['realname']); ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="profile_settings.php">Einstellungen</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="includes/logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="index.php">Speiseplan</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="add_product.php"><i class="icon-chevron-right"></i> Produkt hinzuf&uuml;gen</a>
                        </li>
                        <li>
                            <a href="show_product.php"><i class="icon-chevron-right"></i> Produkte anzeigen</a>
                        </li>
                        <li>
                            <a href="add_food.php"><i class="icon-chevron-right"></i> Speise hinzuf&uuml;gen</a>
                        </li>
                        <li>
                            <a href="show_food.php"><i class="icon-chevron-right"></i> Speisen anzeigen</a>
                        </li>
                        <li>
                            <a href="add_menu.php"><i class="icon-chevron-right"></i> Speiseplan hinzuf&uuml;gen</a>
                        </li>
                        <li>
                            <a href="show_menu.php"><i class="icon-chevron-right"></i> Speisepl&auml;ne anzeigen</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i> Einstellungen</a>
                        </li>
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid" style="display: none;" id="success">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Erfolg</h4>
                            Ihre Speise wurde erfolgreich hinzugefügt!
                        </div>
                    </div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Passwort ändern</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" id="form" name="form" action="#" method="post">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Benutzername</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="username" name="username" placeholder="<?php echo htmlentities($_SESSION['username']); ?>">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Aktuelles Passwort</label>
                                          <div class="controls">
                                            <input type="password" class="span6" id="password" name="password" placeholder="Aktuelles Passwort eingeben ...">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Neues Passwort</label>
                                          <div class="controls">
                                            <input type="password" class="span6" id="newp" name="newp" placeholder="Neues Passwort eingeben ...">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Neues Passwort bestätigen</label>
                                          <div class="controls">
                                            <input type="password" class="span6" id="confirmp" name="confirmp" placeholder="Neues Passwort bestätigen ...">
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" id="sub" class="btn btn-primary" onclick="changepw(this.form, this.form.newp, this.form.confirmp);">Speichern</button>
                                          <button type="reset"  id="res" class="btn">Abbrechen</button>
                                        </div>
                                      </fieldset>
                                    </form>    
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Kirchenkreis Bad Godesberg-Voreifel 2015</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

        <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/form-validation.js"></script>
        
        <script src="my_script.js"></script>
        
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();
        });
        </script>
    </body>

</html>

<?php else : 
header('Location: login.php');
?>

<?php endif; ?>