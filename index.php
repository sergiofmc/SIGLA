<!DOCTYPE html>
<html>
    <head>
        <!--  SEO STUFF START HERE -->
        <title>SiglaHolding::HOME</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="follow, index" />
        <!--  SEO STUFF END -->
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/style-switcher/style-switcher.js"></script>        <!--  revolution slider plugin : begin -->        
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/rs-responsive.css" media="screen" />
        <!--  revolution slider plugin : end -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/styler.css" />
        <link rel="stylesheet" href="css/isotope.css" />
        <link rel="stylesheet" href="css/color_scheme.css" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome-ie7.css" />
        <link rel="stylesheet" href="css/flexslider.css" />
        <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
        <!--[if lte IE 8]>
            <link rel="stylesheet" type="text/css" href="css/IE-fix.css" />
        <![endif]-->
    </head>
    <body>
   <div id="load" style="position:fixed; top:0; left:0; right:0; bottom:0; background:#fff; z-index:999999;"><span></span></div>
        <div class="container"></div>
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
										$_GET['id'] = 1;
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
                        <div class="row">
                            <!-- MAIN CONTENT AREA: SLIDER BANNER (REVOLUTION SLIDER) -->
                            <div class="col-sm-12 col-md-12">
                                <div class="bannercontainer">
                                    <div class="banner">
                                        <ul>
                                            <!-- MAIN CONTENT AREA: SLIDER BANNER (REVOLUTION SLIDER) - SLIDE 1 [SLIDE
                                            STYLE=BOXFADE] -->
                                            <li class="slide1 slide" data-transition="boxfade" data-slotamount="5"
                                                data-masterspeed="300" data-link="objetivo.php">
                                                <img alt="" src="img/slider07.png" class="img-responsive" />
                                                <div class="caption sft carousel-caption" data-x="180" data-y="30" data-speed="1500"
                                                     data-start="500" data-easing="easeInBack" style="background: none;">
                                                    <p class="big">54 años adquiriendo experiencia en <br/>organización de equipos</p>
                                                </div>
                                                <div class="caption lfl carousel-caption" data-x="198" data-y="111" data-speed="1500"
                                                     data-start="2500" data-easing="easeOutBack" style="background: none;">	
                                                    <img alt="" src="img/izquierda.jpg" class="img-responsive" />
                                                </div>
                                                <div class="caption lfr carousel-caption" data-x="648" data-y="111" data-speed="1500"
                                                     data-start="2500" data-easing="easeOutBack" style="background: none;">
                                                    <img alt="" src="img/derecha.jpg" class="img-responsive" />
                                                </div>
												<div class="caption lft carousel-caption" data-x="438" data-y="111" data-speed="1500"
                                                     data-start="2500" data-easing="easeOutBack" style="background: none;">
                                                    <img alt="" src="img/centro.jpg" class="img-responsive" />
                                                </div>
                                                <div class="caption sfb carousel-caption" data-x="60" data-y="247" data-speed="1000"
                                                     data-start="3000" data-easing="easeInBack" style="background: none; width: 436px;">
                                                    <p class="big">Estudios, proyectos y construcciones de ingeniería y <br/>además creación de empresas en chile y otros paises.</p>
                                                </div>
                                            </li>
                                            <!-- MAIN CONTENT AREA: SLIDER BANNER (REVOLUTION SLIDER) - SLIDE 2 [SLIDE
                                            STYLE=LEFT] -->
                                            <li class="slide2 slide" data-link="areaComercial.php" data-transition="slideleft" data-slotamount="10"
                                                data-masterspeed="300">
                                                <img alt="" src="img/sliderComercial.png" class="img-responsive"/>
                                                <div class="caption sft carousel-caption" data-link="areaComercial.php" data-x="242" data-y="29" data-speed="1000"
                                                     data-start="500" data-easing="easeInBack" style="background: none;">
                                                    <p class="big">Proyectos Área Comercial</p>
                                                </div>
                                                <div class="caption sfl carousel-caption"  data-link="areaComercial.php" data-x="-70" data-y="290" data-speed="1000"
                                                     data-start="1500" data-easing="easeOutBack" style="background: none;">	
                                                    <p class="middle">Santiago Chile Metal Exchange</p>
                                                </div>
												<div class="caption sfr carousel-caption"  data-link="areaComercial.php" data-x="582" data-y="107" data-speed="1000"
                                                     data-start="2500" data-easing="easeOutBack" style="background: none;">	
                                                    <p class="middle">Precious and <br/>semiprecious stones</p>
                                                </div>
                                                
                                                <div class="caption sfb carousel-caption" data-link="areaComercial.php" data-x="600" data-y="172" data-speed="1000"
                                                     data-start="3500" data-easing="easeInBack" style="background: none;">
                                                    <p class="small">Exportación de piedras preciosas <br/>y semipreciosas, en bruto <br/>y elaboradas. De los paises de <br/>américa latina como Brasil, <br/>Colombia, Chile y ..</p>
                                                </div>
												
                                            </li>
                                            <!-- MAIN CONTENT AREA: SLIDER BANNER (REVOLUTION SLIDER) - SLIDE 3 [SLIDE
                                            STYLE=SLIDE DOWN] -->
                                            <!--<li class="slide3 slide" data-transition="slidedown" data-slotamount="1"
                                                data-masterspeed="300">
                                                <img alt="" src="img/slider03.png" class="img-responsive" />
                                                <div class="caption sft carousel-caption" data-x="43" data-y="184" data-speed="1000"
                                                     data-start="1000" data-easing="easeInBack" style="background: none; padding-left: 0;">
                                                    <p class="middle">Create beautiful pages quickly and easily...</p>
                                                </div>
                                                <div class="caption sfl carousel-caption" data-x="0" data-y="228" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none; padding-left: 0; width: 781px;">
                                                    <p class="big">Over 30 Shortcuts and Rapid-Design Page Templates!</p>
                                                </div>
                                                <div class="caption sfb carousel-caption" data-x="0" data-y="281" data-speed="1000"
                                                     data-start="1000" data-easing="easeInBack" style="background: none; padding-left: 0; width: 100%;">
                                                    <p class="small">Creating beautiful and highly functional web pages doesn’t have to take
                                                        hours. In fact, with over 30 pre-made page templates, bizstrap makes
                                                        <br
                                                            />creating great looking web pages quick and easy.</p>
                                                </div>
                                            </li>-->
                                            <!-- MAIN CONTENT AREA: SLIDER BANNER (REVOLUTION SLIDER) - SLIDE 4 [SLIDE
                                            STYLE=BOXFADE] -->
                                            <!--<li class="slide4 slide" data-transition="boxfade" data-slotamount="5"
                                                data-masterspeed="300">
                                                <img alt="" src="img/slider07.png" class="img-responsive" />
                                                <div class="caption sft carousel-caption" data-x="45" data-y="78" data-speed="1000"
                                                     data-start="1000" data-easing="easeInBack" style="background: none;">
                                                    <p class="middle">Slap the page with a Sticky Note!</p>
                                                </div>
                                                <div class="caption sfl carousel-caption" data-x="26" data-y="107" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none;">
                                                    <p class="big">Got a special message</p>
                                                </div>
                                                <div class="caption sfl carousel-caption" data-x="26" data-y="160" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none;">
                                                    <p class="big">you want to stand out on a</p>
                                                </div>
                                                <div class="caption sfl carousel-caption" data-x="26" data-y="214" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none;">
                                                    <p class="big">particular web page?</p>
                                                </div>
                                                <div class="caption sfb carousel-caption" data-x="42" data-y="265" data-speed="1000"
                                                     data-start="1000" data-easing="easeInBack" style="background: none; width: 436px;">
                                                    <p class="small">When you have a special message on a particular web page that you want
                                                        to get a across to your visitors then slap that page with one of bizstrap's
                                                        exclusive sticky notes. You'll find that website visitors simply can't
                                                        resist them.</p>
                                                </div>
                                                <div class="caption sfl carousel-caption stick1" data-x="450" data-y="52"
                                                     data-speed="1400" data-start="1000" data-easing="easeInExpo" style="background: none;">
                                                    <img alt="" src="img/slide_stick01.png" class="img-responsive" />
                                                </div>
                                                <div class="caption sfl carousel-caption stick2" data-x="607" data-y="52"
                                                     data-speed="1400" data-start="1500" data-easing="easeInExpo" style="background: none;">
                                                    <img alt="" src="img/slide_stick02.png" class="img-responsive" />
                                                </div>
                                                <div class="caption sfl carousel-caption stick3" data-x="764" data-y="52"
                                                     data-speed="1400" data-start="2000" data-easing="easeInExpo" style="background: none;">
                                                    <img alt="" src="img/slide_stick03.png" class="img-responsive" />
                                                </div>
                                                <div class="caption sfl carousel-caption stick4" data-x="450" data-y="208"
                                                     data-speed="1400" data-start="2500" data-easing="easeInExpo" style="background: none;">
                                                    <img alt="" src="img/slide_stick04.png" class="img-responsive" />
                                                </div>
                                                <div class="caption sfl carousel-caption stick5" data-x="607" data-y="208"
                                                     data-speed="1400" data-start="3000" data-easing="easeInExpo" style="background: none;">
                                                    <img alt="" src="img/slide_stick05.png" class="img-responsive" />
                                                </div>
                                                <div class="caption sfl carousel-caption stick6" data-x="764" data-y="208"
                                                     data-speed="1400" data-start="3500" data-easing="easeInExpo" style="background: none;">
                                                    <img alt="" src="img/slide_stick06.png" class="img-responsive" />
                                                </div>
                                            </li>-->
                                            <!-- MAIN CONTENT AREA: SLIDER BANNER (REVOLUTION SLIDER) - SLIDE 5 [SLIDE
                                            STYLE=SLOTFADE HORIZONTAL] -->
                                            <!--<li class="slide5 slide" data-transition="slotfade-horizontal" data-masterspeed="300"
                                                data-slotamount="20">
                                                <img alt="" src="img/slider04.png" class="img-responsive" />
                                                <div class="caption sft carousel-caption" data-x="468" data-y="71" data-speed="1000"
                                                     data-start="1000" data-easing="easeInBack" style="background: none; padding-left: 0;">
                                                    <p class="middle">Smart, very smart indeed!</p>
                                                </div>
                                                <div class="caption sfr carousel-caption" data-x="454" data-y="105" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none;">
                                                    <p class="big">The Smart Choice for</p>
                                                </div>
                                                <div class="caption sfr carousel-caption" data-x="454" data-y="154" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none;">
                                                    <p class="big">Building Your</p>
                                                </div>
                                                <div class="caption sfr carousel-caption" data-x="454" data-y="205" data-speed="1000"
                                                     data-start="1000" data-easing="easeOutBack" style="background: none;">
                                                    <p class="big">Business Website</p>
                                                </div>
                                                <div class="caption sfb carousel-caption" data-x="480" data-y="268" data-speed="1000"
                                                     data-start="1000" data-easing="easeInBack" style="background: none; padding-left: 0;">
                                                    <p class="small">Affordable, effective and easy-to-use bizstrap is the smart choice for
                                                        building and managing your business website. Smart, very smart indeed!</p>
                                                </div>
                                            </li>-->
                                        </ul>
                                        <div class="tp-bannertimer"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-block">
								<div class="main-block testimonials">
									<div class="title-wrapper">
									</div>
									<div class="clear-both"></div>
									<div class="row show-grid">
										<div class="col-sm-12 col-sm-12 col-md-12">
											<div class="testimonials-block">
												<div class="quote"></div>
												<p class="first-row">TEAM OF ENGINEERS create companies worldwide,
													 generating employments and profitable development.</p>
												<p></p>
											</div>
										</div>
									</div>
									<!-- MAIN CONTENT AREA: bizstrap CUSTOM - HERO BLOCK 3 -->
								</div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="row">
                                        <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - HERO BLOCK 1 (TEXT BLOCK)] -->
                                        <div class="col-sm-5 col-md-5 home-block">
                                            <div class="grey-box hero-block-2">
                                                <h2><a href="#">Invitación a Ingenieros e Inversionistas</a></h2>
                                                <p>Para crear, financiar y desarrollar innovadoras y rentables empresas. Generando empleos y desarrollo económico y Social en todo el mundo.</p>
                                            </div>
											<br/>
											<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
											<script type="IN/MemberProfile" data-id="https://www.linkedin.com/pub/jos%C3%A9-miguel-p%C3%A9rez-gonz%C3%A1lez/16/14/2a" data-format="inline" data-related="false">
											</script>
                                        </div>
                                        <div class="col-sm-1 col-md-1"></div>
                                        <!-- MAIN CONTENT AREA: bizstrap CUSTOM - HERO BLOCK 2 -->
                                        <div class="col-sm-6 col-md-6 home-block hero-block-1">
                                            <h2>1.- Participación en la red de Ingenieros.</h2>
											De acuerdo a su experiencia y especialidad podrán participar como:
                                            <ul>
												<li>
													CEO, Ejecutivos.
												</li>
												<li>
													Desarrollar sus propios planes de negocios, como empresa.
												</li>
												<li>
													Desarrollar su especialidad en los Proyectos de la Empresa.
												</li>
												<li>
													Pueden ser representante de la red en su pais.
												</li>
											</ul>
											<h2>2.- Aporte.</h2>
											Los Ingenieros podrán participar en la empresa aportando:
                                            <ul>
												<li>
													Mínimo 1 acción serie B de US$ 16.000 cada una.
												</li>
												<li>
													Sus planes de negocio, para completar, financiar y desarrollar por el proyecto SiglaHolding y/o dirigiendolo personalmente, instalandolos en cualquier país.
												</li>
											</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<hr />
                            <div class="row main-block index1">
                                <div class="col-sm-12 col-md-12">
                                    <!-- MAIN CONTENT AREA: bizstrap CUSTOM - HERO LIST -->
                            <!--        <div class="row show-grid hero-list">
                                        <div class="col-sm-3 col-md-3">
                                            <div class="image-wrapper">
                                                <div class="img">
                                                    <img alt="" src="img/ruler.png" class="img-responsive" />
                                                </div>
                                            </div>
                                            <div class="image-text">
                                                <h2>Clean Design</h2>
                                                <p>Modern, clean design to give your business a highly professional appearance.
                                                    <a
                                                        href="#">Learn more&raquo;</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="image-wrapper">
                                                <div class="img">
                                                    <img alt="" src="img/equaliser.png" class="img-responsive" />
                                                </div>
                                            </div>
                                            <div class="image-text">
                                                <h2>Flexible Layout</h2>
                                                <p>Flexible page layout templates to help you quickly organize your website's
                                                    content. <a href="#">Learn more&raquo;</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="image-wrapper">
                                                <div class="img">
                                                    <img alt="" src="img/direction.png" class="img-responsive" />
                                                </div>
                                            </div>
                                            <div class="image-text">
                                                <h2>Quick Shortcuts</h2>
                                                <p>Dozens of unique shortcuts to add your own cool and custom flare. <a href="#">Learn more&raquo;</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="image-wrapper">
                                                <div class="img">
                                                    <img alt="" src="img/both_arrows.png" class="img-responsive" />
                                                </div>
                                            </div>
                                            <div class="image-text">
                                                <h2>Responsive</h2>
                                                <p>Ultra-responsive design so your pages work beautifully on practically
                                                    any device. <a href="#">Learn more&raquo;</a>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="horizontal-divider"></div>
                                </div>
                            </div>-->
                            <!-- MAIN CONTENT AREA: bizstrap CUSTOM - PORTFOLIO GRID BLOCK (ORIGINALLY
                            DESIGNED FOR HOME PAGE) -->
                            <!--<div class="portfolio-grid-1 main-block">
                                <div class="title-wrapper">
                                    <h2>Check out our awesome latest work</h2><a class="all" href="#">Show all works&raquo;</a>
                                </div>
                                <div class="clear-both"></div>
                                <div id="home_responsive" class="row show-grid">
                                    <div class="col-sm-3 col-md-3 small hp-wrapper"> <a class="top-link fancy" href="img/gal_2.jpg"><img alt="" src="img/item_220-160_08.jpg" class="img-responsive" /></a>
                                        <div
                                            class="bottom-block"> <a href="#">Integer posuere</a>
                                            <p>UI Design</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 middle hp-wrapper"> <a class="top-link fancy" href="img/img05.jpg">

                                            <img alt="" style="width: 460px; height: 160px;" src="img/item_460-160_01.jpg" class="img-responsive" />

                                        </a>
                                        <div class="bottom-block"> <a href="#">Pellen tesque ornare</a>
                                            <p>Graphic Design</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 middle hp-wrapper"> <a class="top-link fancy" href="img/img07.jpg"><img alt="" style="width: 460px; height: 160px;" src="img/item_460-160_03.jpg" class="img-responsive" /></a>
                                        <div
                                            class="bottom-block"> <a href="#">Pellen tesque ornare</a>
                                            <p>Graphic Design</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 tall hp-wrapper"> <a class="top-link fancy" href="img/img08.jpg"><img alt="" style="width: 220px; height: 340px;" src="img/item_460-340_03.jpg" class="img-responsive" /></a>
                                        <div
                                            class="bottom-block"> <a href="#">Pellen tesque ornare</a>
                                            <p>Graphic Design</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 small hp-wrapper"> <a class="top-link fancy" href="img/gal_7.jpg"><img alt="" style="width: 220px; height: 160px;" src="img/item_220-160_01.jpg" class="img-responsive" /></a>
                                        <div
                                            class="bottom-block"> <a href="#">Integer posuere</a>
                                            <p>UI Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />-->
                            <!-- MAIN CONTENT AREA: bizstrap CUSTOM - HORIZONTAL TESTIMONIAL BLOCK
                            -->
                            <hr />
                            <!-- MAIN CONTENT AREA: bizstrap CUSTOM - RECENT POSTS BLOACK (ORIGINALLY
                            DESIGNED FOR HOME PAGE) -->
                            <div class="main-block block-posts">
                                <div class="title-wrapper">
                                    <h2>Proyectos Destacados</h2><a href="areaComercial.php" class="all">Ver Todos...</a>
                                </div>
                                <div class="row show-grid clear-both">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="row show-grid">
                                            <div class="col-sm-3 col-md-3"> 
												<a class="block-post-img" href="#">
													<img alt="" src="img/sigla/litio.jpg" class="img-rounded img-responsive" />
                                                </a>
                                                <a class="block-post-title" href="#">Litio</a>
                                                <!--<p class="block-post-date">July 25, 2012</p>-->
                                                <p class="block-post-content">Detalle de proyecto de litio,, aqui va mucho mas detalle.</p>
												<a class="block-post-more" href="areaIndustrial.php">Leer más...</a>
                                            </div>
											<div class="col-sm-3 col-md-3"> 
												<a class="block-post-img" href="#">
													<img alt="" src="img/sigla/piedras preciosas.jpg" class="img-rounded img-responsive" />
                                                </a>
                                                <a class="block-post-title" href="#">Piedras Preciosas</a>
                                                <!--<p class="block-post-date">July 25, 2012</p>-->
                                                <p class="block-post-content">Detalle de proyecto de Piedras preciosas, aqui va mucho mas detalle.</p>
												<a class="block-post-more" href="areaComercial.php">Leer más...</a>
                                            </div>
                                            <div class="col-sm-3 col-md-3"> 
												<a class="block-post-img" href="#">
													<img alt="" src="img/sigla/conchas.jpg" class="img-rounded img-responsive" />
                                                </a>
                                                <a class="block-post-title" href="#">Conchas</a>
                                                <!--<p class="block-post-date">July 25, 2012</p>-->
                                                <p class="block-post-content">Detalle de proyecto de conchas, aqui va mucho mas detalle.</p>
												<a class="block-post-more" href="areaIndustrial.php">Leer más...</a>
                                            </div>
                                            <div class="col-sm-3 col-md-3"> 
												<a class="block-post-img" href="#">
													<img alt="" src="img/sigla/yacimientos-arenas.jpg" class="img-rounded img-responsive" />
                                                </a>
                                                <a class="block-post-title" href="#">Yacimientos de Arenas</a>
                                                <!--<p class="block-post-date">July 25, 2012</p>-->
                                                <p class="block-post-content">Detalle de proyecto de yacimientos arenas. mas detalle poner acá</p>
												<a class="block-post-more" href="areaIndustrial.php">Leer más...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <!-- MAIN CONTENT AREA: bizstrap CUSTOM - CLIENTS LOGO BAR -->
                            <!--<div class="main-block clients">
                                <div class="title-wrapper">
                                    <h2>Clients</h2>
                                </div>
                                <div class="row show-grid">
                                    <div class="col-sm-12 col-md-12">
                                        <div id="clients" class="row show-grid">
                                            <div class="col-sm-2 col-md-2 clear-both hp-wrapper">
                                                <img alt="" src="img/client1.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-sm-2 col-md-2 hp-wrapper">
                                                <img alt="" src="img/client2.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-sm-2 col-md-2 hp-wrapper">
                                                <img alt="" src="img/client3.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-sm-2 col-md-2 hp-wrapper">
                                                <img alt="" src="img/client4.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-sm-2 col-md-2 hp-wrapper">
                                                <img alt="" src="img/client5.jpg" class="img-responsive" />
                                            </div>
                                            <div class="col-sm-2 col-md-2 hp-wrapper">
                                                <img alt="" src="img/client6.jpg" class="img-responsive" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <!-- MAIN CONTENT AREA: bizstrap CUSTOM - RECENT TWEETS BAR -->
                    <div class="recent-tweets">
                        <div class="container">
                            <div class="row show-grid">
                                <div class="col-sm-12 col-md-12 twitter-wrapper">
                                    <div id="nav_t"></div>
                                    <div class="tweets-slide">
                                        <ul class="slides"></ul>
                                    </div> <a class="follow_img" href="#"><img alt="" src="img/follow.png" class="img-responsive" /></a>
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
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/revolution.custom.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>