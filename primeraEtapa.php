<!DOCTYPE html>
<html>
    <head>
        <!--  SEO STUFF START HERE -->
        <title>SIGLA :: Primera Etapa</title>
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
                    <?php
					include ('header.php');
					?>
                    <!-- HEADER: PRIMARY SITE NAVIGATION -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="navbar navbar-default">
                                    <div class="navbar-header"></div>
                                    <div class="buttons-container"></div>
                                    <div class="navbar-collapse">
                                         <?php
										$_GET['id'] = 31;
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
                                        <li><a href="objetivo.php">Objetivos</a></li>
										<li><a href="primeraEtapa.php">Primera Etapa</a></li>
                                    </ul>
                                </div>
                                <div class="row show-grid clear-both">
                                    <!-- BEGIN LEFT-SIDEBAR -->
                                    <div id="left-sidebar" class="col-md-3 col-sm-3 sidebar"> 
										<!-- LEFT-SIDEBAR: SIDEBAR NAVIGATION -->
											<div class="side-nav sidebar-block">
											<h2></h2>
											<ul>
												<li><a href="objetivo.php">Objetivos</a>
												</li>
												<li class="active"><a href="#">Primera Etapa</a>
												</li>
												<li><a href="segundaEtapa.php">Segunda Etapa</a>
												</li>
												<li><a href="terceraEtapa.php">Tercera Etapa</a>
												</li>
											</ul>
										</div>                                
									</div>
                                    <!-- END LEFT-SIDEBAR -->

                                    <!-- BEGIN MAIN/PRIMARY ARTICLE CONTENT AREA -->
                                    <div class="col-md-9 col-sm-9 main-column two-columns-left">
                                        <article>
                                            <!-- TEXT HEADER WITH SUBTEXT -->                                
                                            <h1>Primera Etapa <small>Start Up</small></h1>
                                            <!-- FLOAT IMAGE RIGHT -->                                    
                                            <div class="post-img" style="float: right; margin-left: 20px;">
                                                <img alt="" src="img/philosophy.jpg" class="img-polaroid" />
                                            </div>
											<ol>
												<li>
													<h4>Invitación a socios inversionistas.</h4>
													<p>Se invita a inversionistas nacionales y 4267 empresas  de inversiones internacionales de nuestro banco de inversionistas  para que aporten  capital semilla de U$ 4.500.000.</p>
												</li>
												<li>
													<h4>Capital Angel.</h4>
													<p>Financian las siguientes actividades:</p>
													
													<p>2.1.- Realizar el Start Up del proyecto Sigla Holding</p>
													<p>2.2.- Completar los 33 planes de negocio</p>
													<p>2.3.- Adapta su organización a las nuevas necesidades de la empresa</p>
													<p>2.4.- Realización de servicios de Ingeniería, Importación, Exportación, Representación y Broker.</p>
													<p>2.5.- Inicia Exportación  de los productos de las 3 primeras empresas creadas.</p>
													<ul>
														<li>
															<h4>South Pacific Sea Products S.A.</h4> Exporta productos del mar.
														</li>
														<li>
															<h4>Preciuos and Semiprecious Stones S.A.</h4> Exporta  piedras preciosas y semipreciosas.
														</li>
														<li>
															<h4>Sigla Engineering Consulting S.A.</h4> Completa los 33 planes de negocio.
														</li>
													</ul>
												</li>
											</ol>	
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