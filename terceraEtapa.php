<!DOCTYPE html>
<html>
    <head>
        <!--  SEO STUFF START HERE -->
        <title>SIGLA :: Tercera Etapa</title>
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
										$_GET['id'] = 33;
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
                                        <li class="home"><a href="index.php">Home</a></li>
                                        <li><a href="objetivo.php">Objetivos</a></li>
										<li><a href="terceraEtapa.php">Tercera Etapa</a></li>
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
												<li><a href="primeraEtapa.php">Primera Etapa</a>
												</li>
												<li><a href="segundaEtapa.php">Segunda Etapa</a>
												</li>
												<li  class="active"><a href="#">Tercera Etapa</a>
												</li>
											</ul>
										</div>                                
									</div>
                                    <!-- END LEFT-SIDEBAR -->

                                    <!-- BEGIN MAIN/PRIMARY ARTICLE CONTENT AREA -->
                                    <div class="col-md-9 col-sm-9 main-column two-columns-left">
                                        <article>
                                            <!-- TEXT HEADER WITH SUBTEXT -->                                
                                            <h1>Tercera Etapa <small>Filiales Internacionales</small></h1>
                                            <!-- FLOAT IMAGE LEFT -->                                    
                                            <div class="post-img" style="float: left; margin-right: 20px;">
                                                <img alt="" src="img/philosophy.jpg" class="img-polaroid" />
                                            </div>
											
											<ol>
												<li>
													<h4>Filiales en otros paises</h4>
													<p>
														El proyecto Sigla Holding, aporta los 33 planes de negocio aumentados y/o adaptados de acuerdo a las necesidades de los paises y regiones.
													</p>
													<p>
														Con estos planes de negocio se generan nuevas empresas que crean empleos permanentes y desarrollo social y económico.
													</p>
													<p>
														Las empresas en el caribe son mas rentables ya que son paraisos fiscales sin impuestos.
													</p>
												</li>
												<li>
													<h4>Implementación de las Empresas.</h4>
													<p>En estas empresas se utiliza infraestructura, personal y recursos naturales regionales, principalmente inexplotados o poco explotados.</p>
													<p>Firmamos un MOU para construir la empresa Investment And Create Companies IBC en Bahamas con aporte de socios de U$75.000.000.</p>
												</li>
												<li>
													<h4>Financiamiento.</h4>
													<p>Invitación a inversionistas locales y 4.267 empresas de inversiones internacionales del banco de inversionistas del proyecto Sigla Holding. Además financiamiento del BID, Banco Brix, empresas de inversiones de los Emiratos Árabes, República popular China y Rusia.</p>
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