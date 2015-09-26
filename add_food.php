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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Christian Werner <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
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
                        <li class="active">
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
                                <div class="muted pull-left">Speisename, Kategorie & Produkte eingeben</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" id="food_form" action="inser_food.php" method="post">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Speisename</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="food_foodname" name="food_foodname" placeholder="Speisename eingeben ...">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="food_category">Kategorie</label>
                                          <div class="controls">
                                            <select class="chzn-select" id="food_category" name="food_category">
                                              <option>Frühstück</option>
                                              <option>Mittagessen</option>
                                              <option>Kaffee & Kuchen</option>
                                              <option>Abendessen</option>
                                            </select>
                                          </div>
                                        </div>                                       
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Produkt 1</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="food_product1" name="food_product1" placeholder="Produktname eingeben ..." data-provide="typeahead" data-items="4" data-source='["Pommes frites","Spinat","Tomatensoße"]'>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Produkt 2</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="food_product2" name="food_product2" placeholder="Produktname eingeben ..." data-provide="typeahead" data-items="4" data-source='["Pommes frites","Spinat","Tomatensoße"]'>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Produkt 3</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="food_product3" name="food_product3" placeholder="Produktname eingeben ..." data-provide="typeahead" data-items="4" data-source='["Pommes frites","Spinat","Tomatensoße"]'>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Produkt 4</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="food_product4" name="food_product4" placeholder="Produktname eingeben ..." data-provide="typeahead" data-items="4" data-source='["Pommes frites","Spinat","Tomatensoße"]'>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Produkt 5</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="food_product5" name="food_product5" placeholder="Produktname eingeben ..." data-provide="typeahead" data-items="4" data-source='["Pommes frites","Spinat","Tomatensoße"]'>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" id="sub" class="btn btn-primary">Speichern</button>
                                          <button type="reset"	id="res" class="btn">Abbrechen</button>
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