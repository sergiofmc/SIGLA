<!DOCTYPE html>
<html>
    <head>
        <!--  SEO STUFF START HERE -->
        <title>Sigla :: Quienes Somos</title>
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
										$_GET['id'] = 21;
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
                    <div class="span12">
						<!-- BREADCRUMBS -->
                        <div id="breadcrumb">
                        <ul>
                            <li class="home"><a href="#">Home</a></li>
                            <li><a href="#">Quienes Somos</a></li>
                        </ul>
                        </div>
                        <div class="row show-grid clear-both">
							<!-- BEGIN LEFT-SIDEBAR -->
							<div id="left-sidebar" class="col-md-3 col-sm-3 sidebar"> 
								<!-- LEFT-SIDEBAR: SIDEBAR NAVIGATION -->
									<div class="side-nav sidebar-block">
									<h2></h2>
									<ul>
										<li class="active"><a href="aboutUs.php">Quienes Somos</a>
										</li>
										<li><a href="nuestroEquipo.php">Nuestro Equipo</a>
										</li>
									</ul>
								</div>                                
							</div>
							<!-- END LEFT-SIDEBAR -->

							<!-- BEGIN ARTICLE CONTENT AREA -->
                            <div class="col-md-9 col-sm-9 main-column two-columns-left">
								<article>
									<h1>¿Quienes Somos?</h1>
									 <div class="post-img" style="float: right; margin-left: 20px;">
                                                <img alt="" src="img/sigla/quienesSomos.JPG" class="img-polaroid" />
                                            </div>
									
									<p></p>
									<p>Sigla Sociedad de Ingenieros S.A.(SIGLA S.A.) Es una antigua y multidisciplinaria empresa chilena de ingeniería, fundada en 1961 como sociedad Limitada.</p>
									
									<p>En 1994, se transformó en sociedad anónima, con 5 ingenieros socios, posteriormente se han incorporado otros 18 ingenieros y 5 profesionales</p>
									
									<p>En este periodo SIGLA S.A. ha creado el "Proyecto Sigla Holding" que ha seleccionado y estudia 33 planes de necocios, en las siguientes áreas económicas: negocios, turismo, industria, productos del mar, agroindustria, construcción, portuaria, agricultura, ingenieria, servicios financieros, medio ambiente, y energias renovables</p>
									
									 <!-- BLOCKQUOTE -->                                    
									<blockquote>
										
											<p>
												En este periodo, valoriza su capital inicial <br/> de US$ 300.000 a US$ 17.000.000
											</p>
										
									</blockquote>
								
								<hr/>
									<h1>Misión</h1>
									<blockquote>
										
											<p>
												Se implementó con la finalidad que ingenieros y otros profesionales tengan

la oportunidad de crear y desarrollar empresas worldwide.
											</p>
										
									</blockquote>
									
									<h1>Visión</h1>
									<blockquote>
										
											<p>
												Los ingenieros y profesionales participan como socios, expertos o

ejecutivos  en SIGLAHOLDING o empresas del Proyecto 

SIGLAHOLDING.
											</p>
										
									</blockquote>
									
									<h1>Valores</h1>
									<blockquote>
										
											<p>
												El “Proyecto SIGLAHOLDING” crea desarrollo económico y social al

generar además mano de obra, principalmente en los Países  en 

Desarrollo y Países Pobres.
											</p>
										
									</blockquote>
								</article>
							</div>
                        </div>
                    </div>
                </div>
                
            </div>
			<!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->              
            <div class="recent-tweets">
                <div class="container">
                    <div class="row show-grid">
                        <div class="span12 twitter-wrapper">
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