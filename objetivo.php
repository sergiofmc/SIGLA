<!DOCTYPE html>
<html>
    <head>
        <!--  SEO STUFF START HERE -->
        <title>SIGLA :: Objetivo</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="follow, index" />
        <!--  SEO STUFF END -->     
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/style-switcher/style-switcher.js"></script>
<link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/styler.css" />
        <link rel="stylesheet" href="css/isotope.css" />
        <link rel="stylesheet" href="css/color_scheme.css" />
        <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
        <!--[if lte IE 8]>
            <link rel="stylesheet" type="text/css" href="css/IE-fix.css" />
        <![endif]-->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome-ie7.css" />
        <link rel="stylesheet" href="css/flexslider.css" />
    </head>
    <body>
   <div id="load" style="position:fixed; top:0; left:0; right:0; bottom:0; background:#fff; z-index:999999;"><span></span></div>
        <div id="over">
            <div id="out_container">
                <!-- THE LINE AT THE VERY TOP OF THE PAGE -->
                <div class="top_line"></div>
                <!-- HEADER AREA -->
                <header>
                    <div class="container">
                         <?php
							include ('header.php');
						?> 
                    </div>
                    <!-- HEADER: PRIMARY SITE NAVIGATION -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="navbar navbar-default">
                                    <div class="navbar-header"></div>
                                    <div class="buttons-container"></div>
                                    <div class="navbar-collapse">
									 <?php
										$_GET['id'] = 3;
										include ('menu.php');
									?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- MAIN CONTENT AREA -->        
                <div class="main-content">
                    <div class="container">
                        <div class="row show-grid">
                            <div class="col-md-12 col-sm-12">
                                <!-- BREADCRUMBS -->
                                <div id="breadcrumb">
                                    <ul>
                                        <li class="home"><a href="#">Home</a></li>
                                        <li><a href="#">Objetivos</a></li>
                                    </ul>
                                </div>
                                <div class="row show-grid clear-both">
                                    <!-- BEGIN LEFT-SIDEBAR -->
                                    <div id="left-sidebar" class="col-md-3 col-sm-3 sidebar"> 
										<!-- LEFT-SIDEBAR: SIDEBAR NAVIGATION -->
											<div class="side-nav sidebar-block">
											<h2></h2>
											<ul>
												<li class="active"><a href="#">Objetivos</a>
												</li>
												<li><a href="primeraEtapa.php">Primera Etapa</a>
												</li>
												<li><a href="segundaEtapa.php">Segunda Etapa</a>
												</li>
												<li><a href="segundaEtapa.php">Tercera Etapa</a>
												</li>
											</ul>
										</div>                                
									</div>
                                    <!-- END LEFT-SIDEBAR -->

                                    <!-- BEGIN MAIN/PRIMARY ARTICLE CONTENT AREA -->
                                    <div class="col-md-9 col-sm-9 main-column two-columns-left">
                                        <article>
                                            <!-- TEXT HEADER WITH SUBTEXT -->                                
                                            <h1>Objetivo del Proyecto <small>Sigla Holding</small></h1>
                                            <!-- FLOAT IMAGE RIGHT -->                                    
                                            <div class="post-img" style="float: right; margin-left: 20px;">
                                                <img alt="" src="img/philosophy.jpg" class="img-polaroid" />
                                            </div>
											<h4>1.- Selecciona y estudia planes de negocio.</h4>
                                            <p>Especialmente de recursos naturales inexplotados, innovadores y rentables en chile y otros paises</p>
											
											<h4>2.- Primera etapa. START UP del proyecto SIGLA Holding.</h4>
                                            <p>Con el capital Angel realiza el startup del proyecto Sigla Holding, financia complerar los 33 planes de negocios, adapta su organizacion a las nuevas necesidades de la empresa y pone en marcha sus servicios</p>
											
											<h4>3.- Segunda Etapa. Constitución de empresas filiales nacionales.</h4>
                                            <p>Plan para descentralizar chile, se crean empresas con los 33 planes de negocio, adaptados a cada región</p>
                                            
											<h4>4.- Tercera Etapa. Constitución de empresas filiales internacionales.</h4>
                                            <p>Planes para otros, se crean empresas con los 33 planes de negocios adaptados a cada pais</p>
											
											<h4>5.- Servicios centralizados.</h4>
                                            <p>Ingeniería, importación, exportación, broker y representaciones para los productos y servicios de las empresas del proyecto SIGLA Holding</p>
                                            
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN MAIN/PRIMARY ARTICLE CONTENT AREA -->
                        <hr>
                    </div>
                    <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->               
                    <div class="recent-tweets">
                        <div class="container">
                            <div class="row show-grid">
                                <div class="col-md-12 col-sm-12 twitter-wrapper">
                                    <div id="nav_t"></div>
                                    <div class="tweets-slide"><ul class="slides"></ul></div>
                                    <a class="follow_img" href="#"><img alt="" src="img/follow.png" /></a>
                                </div>
                            </div>    
                        </div>           
                    </div>
                </div>
                <?php
				include ('footer.php');
				?>
            </div>
        </div>
            <!-- Placed at the end of the document so the pages load faster -->
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
            <script type="text/javascript" src="js/jquery.isotope.js"></script>
            <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.0"></script>
            <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>