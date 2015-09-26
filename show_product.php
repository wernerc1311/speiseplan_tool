<!DOCTYPE html>
<html>
    
    <head>
        <title>BGV Admin Panel - Speiseplan</title>
        <meta charset="utf-8">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
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
                    <a class="brand" href="#">BGV Admin Panel</a>
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
                        <li class="active">
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
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Produkte anzeigen</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="show_product">
										<thead>
											<tr>
												<th>Produktname</th>
												<th>Zusatzstoffe</th>
												<th>Allergene</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td>Pommes frites</td>
												<td class="center">1, 3, 4</td>
												<td class="center">3</td>
											</tr>
											<tr class="odd gradeX">
												<td>Tomatensoße</td>
												<td class="center">2, 4, 6</td>
												<td class="center">6</td>
											</tr>
											<tr class="odd gradeX">
												<td>Spinat</td>
												<td class="center">3, 5, 7</td>
												<td class="center">3</td>
											</tr>
										</tbody>
									</table>
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

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>