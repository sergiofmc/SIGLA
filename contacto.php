<!DOCTYPE html>
<html>
    <head>
        <!--  SEO STUFF START HERE -->
        <title>SIGLA :: Formulario de Contacto</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="follow, index" />
        <!--  SEO STUFF END -->     
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/styler.css" />
        <link rel="stylesheet" href="css/isotope.css" />
        <link rel="stylesheet" href="css/color_scheme.css" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome-ie7.css" />
        <link rel="stylesheet" href="css/flexslider.css" />
		<link rel="stylesheet" href="css/jquery.jnotify.css" type="text/css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <!--[if lte IE 8]>
            <link rel="stylesheet" type="text/css" href="css/IE-fix.css" />
        <![endif]-->
    </head>
    <body>
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
										$_GET['id'] = 6;
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
                            <div class="col-md-12 col-sm-12" data-original-title="">
                                <!-- BREADCRUMBS -->                    
                                <div id="breadcrumb">
                                    <ul>
                                        <li class="home"><a href="#">Home</a></li>
                                        <li>Cont&aacute;ctenos</li>
                                    </ul>
                                </div>
                                <div class="clear_both"></div>
                                <div class="col-wrapper">                        
                                    <div class="row show-grid">
                                        <!-- START LEFT-SIDE CONTACT FORM AREA -->
										<ul class="nav nav-tabs" id="myTab">
											<li class="active"><a data-toggle="tab" href="#tab-contacto">Contacto</a></li>
											<li class=""><a data-toggle="tab" href="#tab-recomendar">Recomi&eacute;ndanos</a></li>
											
										</ul>
										<div class="tab-content" id="myTabContent">
											<div id="tab-contacto" class="tab-pane fade active in">
												<div class="contact-form col-md-8 col-sm-8">
													<div id="result">
													</div>
													
													
													<form class="contact_form" name="contactForm" id="contact_form" method="POST" action="#">
															<div class="row">
																<div class="control-group col-md-6 col-sm-6">
																	<label class="control-label" for="nombre">NOMBRE<sup>*</sup></label>
																	<div class="controls">
																		<input class="form-control" name="nombre" type="text" id="nombre" placeholder="Nombre y Apellido">
																		<span class="help-inline">Ingrese su nombre</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="control-group col-md-6 col-sm-6">
																	<label class="control-label" for="email">EMAIL<sup>*</sup></label>
																	<div class="controls">
																		<input class="form-control" name="email" type="email" class="col-md-4 col-sm-4" id="email" placeholder="Email">
																		<span class="help-inline">Ingrese un email v&aacute;lido</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="control-group col-md-6 col-sm-6">
																	<label class="control-label" for="nroContacto">N&deg; CONTACTO<sup>*</sup></label>
																	<div class="controls">
																		<input class="form-control" name="nroContacto" type="text" class="col-md-4 col-sm-4" id="nroContacto" placeholder="Nro de Contacto">
																		<span class="help-inline">Ingrese un n&uacute;mero de contacto</span>
																	</div>
																</div>
															</div>
															<div class="row">
															<div class="control-group col-md-12 col-sm-12">
																<label for="mensaje" class="control-label">MENSAJE<sup>*</sup></label>
																<div class="controls">
																	<textarea class="form-control" name="mensaje" rows="4" id="mensaje"></textarea>
																	<span class="help-inline">D&eacute;jenos sus comentarios</span>
																</div>
															</div>
															</div>
															<?php
															//require_once('config.php');
															//require_once('recaptchalib.php');
															//if($use_recaptcha === true){
															//	echo recaptcha_get_html($publickey);
															//}
															?>
															<div class="control-group form-button-offset">
																<input style="margin-top: 10px;" type="submit" class="btn btn-default" value="Enviar Mensaje" />
															</div>
													</form>
													<!--
													<form class="contact_form" action="#" method="post" id="contact_form">

														<label for="nombre">Nombre:</label>
														<br>
														<input id="nombre" type="text"  placeholder="Adocit Chile" required maxlength="100">
														</input>
														<br>
														<label for="email">Email:</label>
														<br>
														<input id="email" type="email" name="email" placeholder="ejemplo@adocit.cl" required maxlength="100">
														</input>
														<br>
														<label for="website">Sitio Web:</label>
														<br>
														<input id="website" type="url" name="web" placeholder="http://www.adocit.cl" maxlength="100">
														</input>
														<br>
														<label for="mensaje">Mensaje:</label>
														<br>
														<textarea id="mensaje" name="Mensaje" cols="35" rows="6" required></textarea>
														<br>
														<button class="submit" type="submit">
															Enviar
														</button>

													</form>
													-->
													<script type="text/javascript" src="js/jquery.jnotify.js"></script>
													<script>
														$('#contact_form').submit(function(e) {
															
															var nombre = $('#nombre').val();
															var email = $('#email').val();
															var nroContacto = $('#nroContacto').val();
															var mensaje = $('#mensaje').val();
															
															$('#nombre').val('');
															$('#email').val('');
															$('#nroContacto').val('');
															$('#mensaje').val('');
															if(nombre!=''){
																if(email!=''){
																	if(mensaje!=''){
																																	
																		$.ajax({
																			type : "POST",
																			url : "/backend/procesarContacto.php",
																			data : {
																				fnombre : nombre,
																				femail : email,
																				fnroContacto : nroContacto,
																				fmensaje : mensaje
																			},
																			cache : false,
																			timeout : 10000,
																			success : function() {
																				jNotify('Hemos recibido su mensaje, <br/>Pronto estaremos en contacto con usted para responder a su consulta.',{
																					TimeShown : 2500,
																					autoHide : true,
																					clickOverlay : true,
																					HorizontalPosition : 'right',
																					VerticalPosition : 'top' 
																				});
																			},
																			error : function() {
																				jError('error',{
																					TimeShown : 2500,
																					autoHide : true,
																					clickOverlay : true,
																					HorizontalPosition : 'right',
																					VerticalPosition : 'top' 
																				});
																			}
																		});
																		
																		
																		
																	}
																	else{
																		jError('Mensaje vacio<br/> Debe ingresar el contenido del mensaje para enviar la consulta',{
																			TimeShown : 2500,
																			autoHide : true,
																			clickOverlay : true,
																			HorizontalPosition : 'right',
																			VerticalPosition : 'top' 
																		});
																	}
																}else{
																	jError('Email inv&aacute;lido<br/> Debe ingresar un correo v&aacute;lido para poder ser contactado de vuelta',{
																			TimeShown : 2500,
																			autoHide : true,
																			clickOverlay : true,
																			HorizontalPosition : 'right',
																			VerticalPosition : 'top' 
																		});
																}
																
															}else{
																jError('Nombre vacio<br/> Debe ingresar su nombre para enviar la consulta',{
																			TimeShown : 2500,
																			autoHide : true,
																			clickOverlay : true,
																			HorizontalPosition : 'right',
																			VerticalPosition : 'top' 
																		});
															}
															return false;
														});
													</script>
												</div>
											</div>
											<div id="tab-recomendar" class="tab-pane fade">
												<div class="contact-form col-md-8 col-sm-8">
													<div id="result">
													</div>
														<form class="recomendar_form" name="recomendarForm" id="recomendar_form" method="POST" action="#">
															<div class="row">
																<div class="control-group col-md-6 col-sm-6">
																	<label class="control-label" for="su_nombre">Su EMAIL<sup>*</sup></label>
																	<div class="controls">
																		<input class="form-control" name="su_nombre" type="text" class="col-md-4 col-sm-4" id="su_nombre" placeholder="Ingrese su nombre">
																		<span class="help-inline">Ingrese su Nombre</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="control-group col-md-6 col-sm-6">
																	<label class="control-label" for="email_propio">Su EMAIL<sup>*</sup></label>
																	<div class="controls">
																		<input class="form-control" name="email_propio" type="email" class="col-md-4 col-sm-4" id="email_propio" placeholder="Email">
																		<span class="help-inline">Ingrese un email v&aacute;lido</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="control-group col-md-6 col-sm-6">
																	<label class="control-label" for="email_referido">EMAIL Amigo<sup>*</sup></label>
																	<div class="controls">
																		<input class="form-control" name="email_referido" type="email" class="col-md-4 col-sm-4" id="email_referido" placeholder="Email">
																		<span class="help-inline">Ingrese un email v&aacute;lido</span>
																	</div>
																</div>
															</div>
															<div class="row">
															<div class="control-group col-md-12 col-sm-12">
																<label for="mensaje_referido" class="control-label">MENSAJE<sup>*</sup></label>
																<div class="controls">
																	<textarea class="form-control" name="mensaje_referido" rows="4" id="mensaje_referido" placeholder="Te env&iacute;o la informaci&oacute;n de siglaholding, ya que considero que puede ser de tu inter&eacute;s"></textarea>
																	<span class="help-inline">Mensaje a referido</span>
																</div>
															</div>
															</div>
															
															<div class="control-group form-button-offset">
																<input style="margin-top: 10px;" type="submit" class="btn btn-default" value="Enviar referencia" />
															</div>
													</form>
													<script>
														$('#recomendar_form').submit(function(e) {
															
															var nombre = $('#su_nombre').val();
															var emailPropio = $('#email_propio').val();
															var email_referido = $('#email_referido').val();
															var mensaje_referido = $('#mensaje_referido').val();
															
															$('#nombre').val('');
															$('#email_propio').val('');
															$('#email_referido').val('');
															$('#mensaje_referido').val('');
															if(nombre!=''){
																if(email_propio!=''){
																	if(email_referido!=''){
																		if(mensaje_referido!=''){
																			$.ajax({
																				type : "POST",
																				url : "/backend/procesarContacto.php",
																				data : {
																					fnombre : nombre,
																					femail : email,
																					fnroContacto : nroContacto,
																					fmensaje : mensaje
																				},
																				cache : false,
																				timeout : 10000,
																				success : function() {
																					$.jnotify("Hemos recibido solicitud, en unos minutos será generado el correo de contacto a su referido.", 2500);
																				},
																				error : function() {
																					$.jnotify("Error, favor intente m&aacute;s tarde.", "error",2500);
																				}
																			});
																		}
																		else{
																			jError('Mensaje vacio<br/> Debe ingresar el contenido del mensaje para enviar la consulta',{
																				TimeShown : 2500,
																				autoHide : true,
																				clickOverlay : true,
																				HorizontalPosition : 'right',
																				VerticalPosition : 'top' 
																			});
																		}
																		
																		
																	}
																	else{
																		jError('Email referido inv&aacute;lido<br/> Debe ingresar un correo v&aacute;lido.',{
																			TimeShown : 2500,
																			autoHide : true,
																			clickOverlay : true,
																			HorizontalPosition : 'right',
																			VerticalPosition : 'top' 
																		});
																	}
																}else{
																	jError('Email propio inv&aacute;lido<br/> Debe ingresar un correo v&aacute;lido.',{
																			TimeShown : 2500,
																			autoHide : true,
																			clickOverlay : true,
																			HorizontalPosition : 'right',
																			VerticalPosition : 'top' 
																		});
																}
																
															}else{
																$.jnotify("Nombre vacio<br/> Debe ingresar su nombre para enviar la consulta", "error", true);
															}
															return false;
														});
													</script>
												</div>
											</div>
											
										</div>
                                        
                                        <!-- END LEFT-SIDE CONTACT FORM AREA -->

                                        <!-- BEGIN RIGHT-SIDE CONTACT FORM AREA -->
                                        <div class="contact-info col-md-4 col-sm-4">
                                            <h2>SIGLA Holding</h2>
                                            <!-- COMPANY ADDRESS -->                                    
                                            <address>
                                                Adriana Cousi&ntilde;o 360,<br />
                                                Santiago,<br />
                                                Chile<br />
                                                Phone: (+56 2) 2 6396538<br />
                                                Email: <a href="mailto:president@siglaholding.com">president@siglaholding.com</a><br />
                                                Web: <a href="#">www.siglaholding.com</a>
                                            </address>
                                            <!-- SOCIAL ICONS -->                                                                
                                            <ul class="socials unstyled">
                                                <li><a href="#" class="twitter"></a></li>
                                                
                                                <li><a href="#" class="linkedin"></a></li>
                                            </ul>
                                            
                                        </div>
                                        <!-- END RIGHT-SIDE CONTACT FORM AREA -->

                                        
										
                                    </div>               
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                    </div>
                    <!-- MAIN CONTENT AREA: REDESIGN CUSTOM - RECENT TWEETS BAR -->

                </div>
                <?php
					include ('footer.php');
				?>
            </div>
            </div>

            <!-- Placed at the end of the document so the pages load faster -->
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/style-switcher/style-switcher.js"></script>

            <script type="text/javascript" src="js/jquery-ui.min.js"></script>
            <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
            <script type="text/javascript" src="js/jquery.isotope.js"></script>
            <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.0"></script>
            <script type="text/javascript" src="js/custom.js"></script>
            <script type="text/javascript" src="js/mail_validation.js"></script>
    </body>
</html>