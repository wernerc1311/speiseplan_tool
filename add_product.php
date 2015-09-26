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
                        <li class="active">
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
                        	Ihr Produkt wurde erfolgreich hinzugefügt!
                        </div>
                    </div>
                    <div class="row-fluid" style="display: none;" id="inputerror">
                        <div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Fehler</h4>
                        	Bitte geben Sie mindestens einen Produktnamen an!
                        </div>
                    </div>
                    <div class="row-fluid" style="display: none;" id="ajaxerror">
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Fehler</h4>
                            Bei der Übertragung der Daten ist ein unbekannter Fehler aufgetreten!
                        </div>
                    </div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Produktname, Zusatzstoffe & Allergene eingeben</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" id="product_form" method="post">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Produktname</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="productname" name="produktname" placeholder="Produktname eingeben ...">
                                          </div>
                                        </div>                                     
                                        <div class="control-group">
                                          <label class="control-label" for="optionsCheckbox">Zusatzstoffe</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff1" value="1"> mit Farbstoff<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff2" value="2"> konserviert<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff3" value="3"> mit Antioxidationsmittel<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff4" value="4"> mit Geschmacksverst&auml;rker<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff5" value="5"> geschwefelt<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff6" value="6"> geschw&auml;rzt<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff7" value="7"> gewachst<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff8" value="8"> mit Phosphat<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff9" value="9"> mit S&uuml;&szlig;ungsmitteln<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="zusatzstoff10" value="10"> mit Phenylalaninquelle<br>
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="optionsCheckbox">Allergene</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen1" value="1"> Gluten<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen2" value="2"> Krebstiere<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen3" value="3"> Eier<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen4" value="4"> Fisch<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen5" value="5"> Erdn&uuml;sse<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen6" value="6"> Soja<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen7" value="7"> Milch<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen8" value="8"> Schalenfr&uuml;chte (N&uuml;sse)<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen9" value="9"> Sellerie<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen10" value="10"> Senf<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen11" value="11"> Sesamsamen<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen12" value="12"> Schwefeldioxid und Sulfite<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen13" value="13"> Lupinen<br>
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" name="allergen14" value="14"> Weichtiere<br>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" id="sub" class="btn btn-primary">Speichern</button>
                                          <button type="reset" 	id="res"class="btn">Abbrechen</button>
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
		
		
        
        <script>
        $(function() {
        	$(".uniform_on").uniform();
        	$(".chzn-select").chosen();
        	
        	$("#sub").click(function (e) {
            e.preventDefault();
            if($("#productname").val()==='')
            	{
                	showInputError();
                	return false;
            	}
            else
            	{	
            		// get the form data
            		var formData = {
            			'produktname'        : $('input[name=produktname]').val(),
            			'zusatzstoff1'       : $('input[name=zusatzstoff1]').val(),
            			'zusatzstoff2'       : $('input[name=zusatzstoff2]').val(),
            			'zusatzstoff3'       : $('input[name=zusatzstoff3]').val(),
            			'zusatzstoff4'       : $('input[name=zusatzstoff4]').val(),
            			'zusatzstoff5'       : $('input[name=zusatzstoff5]').val(),
            			'zusatzstoff6'       : $('input[name=zusatzstoff6]').val(),
            			'zusatzstoff7'       : $('input[name=zusatzstoff7]').val(),
            			'zusatzstoff8'       : $('input[name=zusatzstoff8]').val(),
            			'zusatzstoff9'       : $('input[name=zusatzstoff9]').val(),
            			'zusatzstoff10'      : $('input[name=zusatzstoff10]').val(),
            			'allergen1'			 : $('input[name=allergen1]').val(),
            			'allergen2'			 : $('input[name=allergen2]').val(),
            			'allergen3'			 : $('input[name=allergen3]').val(),
            			'allergen4'			 : $('input[name=allergen4]').val(),
            			'allergen5'			 : $('input[name=allergen5]').val(),
            			'allergen6'			 : $('input[name=allergen6]').val(),
            			'allergen7'			 : $('input[name=allergen7]').val(),
            			'allergen8'			 : $('input[name=allergen8]').val(),
            			'allergen9'			 : $('input[name=allergen9]').val(),
            			'allergen10'		 : $('input[name=allergen10]').val(),
            			'allergen11'		 : $('input[name=allergen11]').val(),
            			'allergen12'		 : $('input[name=allergen12]').val(),
            			'allergen13'		 : $('input[name=allergen13]').val(),
            			'allergen14'		 : $('input[name=allergen14]').val()
        			};
            	
            		// process the form
        			$.ajax({
            			type        : 'POST',
            			url         : 'inserts/insert_product.php',
            			data        : formData,
                        encode      : true,
                        success: function(data, textStatus, jqXHR){
                            showSuccess();
                            $("input[type=text], textarea").val("");
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                            showAjaxError();
                        }
        			})
            	}
            });
            
            
            function showSuccess() {
				$("#success").show();
				$("#success").delay(5000).fadeOut();
			}

			function showInputError() {
				$("#inputerror").show();
				$("#inputerror").delay(5000).fadeOut();
			}

            function showAjaxError() {
                $("#ajaxerror").show();
                $("#ajaxerror").delay(5000).fadeOut();
            }
            
        	
        });
        </script>
    </body>

</html>