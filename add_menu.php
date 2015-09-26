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
                        <li>
                            <a href="add_food.php"><i class="icon-chevron-right"></i> Speise hinzuf&uuml;gen</a>
                        </li>
                        <li>
                            <a href="show_food.php"><i class="icon-chevron-right"></i> Speisen anzeigen</a>
                        </li>
                        <li class="active">
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
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Datum festlegen</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal">
                                      <fieldset>
                                        <div class="control-group">
                                          <label class="control-label" for="date01">Datum</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" id="date01" value="11/01/2015">
                                            <p class="help-block">Bitte geben Sie das Datum der Ver&ouml;ffentlichung an.</p>
                                          </div>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Speisen den Mahlzeiten zuordnen</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          <div class="navbar-inner">
                                            <div class="container">
                                        <ul>
                                            <li><a href="#tab1" data-toggle="tab">Fr&uuml;hst&uuml;ck</a></li>
                                            <li><a href="#tab2" data-toggle="tab">Mittagessen</a></li>
                                            <li><a href="#tab3" data-toggle="tab">Kaffee & Kuchen</a></li>
                                            <li><a href="#tab4" data-toggle="tab">Abendessen</a></li>
                                        </ul>
                                         </div>
                                          </div>
                                        </div>
                                        <div id="bar" class="progress progress-striped active">
                                          <div class="bar"></div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                               <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 1</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 2</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 3</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 1</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 2</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 3</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 1</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 2</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 3</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 1</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 2</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Speise 3</label>
                                                      <div class="controls">
                                            			<input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Spaghetti Bolognese","Spaghetti alla carbonara","Currywurst mit Pommes"]'>
                                            		  </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            <ul class="pager wizard">
                                                <li class="previous first" style="display:none;"><a href="javascript:void(0);">Erster</a></li>
                                                <li class="previous"><a href="javascript:void(0);">Zur&uuml;ck</a></li>
                                                <li class="next last" style="display:none;"><a href="javascript:void(0);">Letzter</a></li>
                                                <li class="next"><a href="javascript:void(0);">Weiter</a></li>
                                                <li class="next finish" style="display:none;"><a href="javascript:;">Fertig</a></li>
                                            </ul>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Speichern oder Abbrechen</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal">
                                      <fieldset>
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Speichern</button>
                                          <button type="reset" class="btn">Abbrechen</button>
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
        	$(".datepicker").datepicker();
        	$(".uniform_on").uniform();
        	$(".chzn-select").chosen();
        	$('.textarea').wysihtml5();
        	
        	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>