<?

$itemMenu = $_GET["id"];

?>
<ul class="nav nav-pills navbar-nav">
	<? if($itemMenu=="1"){
		echo '<li class="single active"><a href="index.php">HOME <i>sigla home</i></a></li>';
	}else{
		echo '<li class="single"><a href="index.php">HOME <i>sigla home</i></a></li>';
	}
		
	if(substr($itemMenu,0,1)=="2"){
		echo '<li id="2" class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="aboutUs.php">QUIENES SOMOS<i>Qui&eacute;nes Somos</i> </a>';	
	}else{
		echo '<li id="2" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="aboutUs.php">QUIENES SOMOS<i>Qui&eacute;nes Somos</i></a>';
	}
	?>
		<ul class="dropdown-menu">
		<?
			if($itemMenu=="21"){
				echo '<li class="active"> <a href="#">Nuestra Empresa</a></li>';
			}else{
				echo '<li> <a href="aboutUs.php">Nuestra Empresa</a></li>';
			}
			if($itemMenu=="22"){
				echo '<li class="active"> <a href="#">Nuestro Equipo </a></li>';
			}else{
				echo '<li> <a href="nuestroEquipo.php">Nuestro Equipo</a></li>';
			}
		
		?>
		</ul>
	</li>
	<?	
	if(substr($itemMenu,0,1)=="3"){
		echo '<li id="3" class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="objetivo.php">OBJETIVOS<i>del Proyecto</i></a>';	
	}else{
		echo '<li id="3" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="objetivo.php">OBJETIVOS<i>del Proyecto</i></a>';
	}
	?>
		<ul class="dropdown-menu">
		<?
			if($itemMenu=="30"){
				echo '<li class="active"> <a href="#">Objetivo</a></li>';
			}else{
				echo '<li> <a href="objetivo.php">Objetivo</a></li>';
			}
			if($itemMenu=="31"){
				echo '<li class="active"> <a href="#">Primera Etapa</a></li>';
			}else{
				echo '<li> <a href="primeraEtapa.php">Primera Etapa</a></li>';
			}
			if($itemMenu=="32"){
				echo '<li class="active"> <a href="#">Segunda Etapa</a></li>';
			}else{
				echo '<li> <a href="segundaEtapa.php">Segunda Etapa</a></li>';
			}
			if($itemMenu=="33"){
				echo '<li class="active"> <a href="#">Tercera Etapa</a></li>';
			}else{
				echo '<li> <a href="terceraEtapa.php">Tercera Etapa</a></li>';
			}
		?>
		</ul>
	</li>
	<?
		if($itemMenu=="4"){
			echo '<li class="single active"><a href="#">¿Cómo Participar?<i>Únete a SIGLA</i></a></li>';
		}else{
			echo '<li class="single"><a href="joinUs.php">¿Cómo Participar?<i>Únete a SIGLA</i></a></li>';
		}
	
		if(substr($itemMenu,0,1)=="5"){
			echo '<li class="dropdown active"> <a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">PROYECTOS<i>Áreas</i></a>';	
		}else{
			echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">PROYECTOS<i>Áreas</i></a>';
		}
		?>
	
		<ul class="dropdown-menu">
		<?
		if($itemMenu=="51"){
			echo '<li class="active"><a href="#">Comercial</a></li>';
		}else{
			echo '<li> <a href="areaComercial.php">Comercial</a></li>';
		}
		if($itemMenu=="52"){
			echo '<li class="active"><a href="#">Industrial</a></li>';
		}else{
			echo '<li> <a href="areaIndustrial.php">Industrial</a></li>';
		}
		if($itemMenu=="53"){
			echo '<li class="active"><a href="#">Productos del Mar</a>';
		}else{
			echo '<li> <a href="areaProductosMar.php">Productos del Mar</a>';
		}
		if($itemMenu=="54"){
			echo '<li class="active"><a href="#">Agroindustrial</a>';
		}else{
			echo '<li><a href="areaAgroindustrial.php">Agroindustrial</a>';
		}	
		if($itemMenu=="55"){
			echo '<li class="active"><a href="#">Medio Ambiente</a>';
		}else{
			echo '<li><a href="areaMedioAmbiente.php">Medio Ambiente</a>';
		}
		if($itemMenu=="56"){
			echo '<li class="active"><a href="#">Ingeniería</a>';
		}else{
			echo '<li><a href="areaIngenieria.php">Ingeniería</a>';
		}
		if($itemMenu=="57"){
			echo '<li class="active"><a href="#">Turística</a>';
		}else{
			echo '<li><a href="areaTuristica.php">Turística</a>';
		}
		if($itemMenu=="58"){
			echo '<li class="active"><a href="#">Construcción</a>';
		}else{
			echo '<li><a href="areaConstruccion.php">Construcción</a>';
		}
		if($itemMenu=="59"){
			echo '<li class="active"><a href="#">Agrícola</a>';
		}else{
			echo '<li><a href="areaAgricola.php">Agrícola</a>';
		}
		if($itemMenu=="510"){
			echo '<li class="active"><a href="#">Finanzas</a>';
		}else{
			echo '<li><a href="areaFinanzas.php">Finanzas</a>';
		}
		if($itemMenu=="511"){
			echo '<li class="active"><a href="#">Portuaria</a>';
		}else{
			echo '<li><a href="areaPortuaria.php">Portuaria</a>';
		}
		if($itemMenu=="512"){
			echo '<li class="active"><a href="#">Energías Renovables</a>';
		}else{
			echo '<li><a href="areaEnergiaRenovable.php">Energías Renovables</a>';
		}
		?>
		</ul>
	</li>
	<?
		if($itemMenu=="4"){
			echo '<li class="single active"><a href="#">CONTACTO<i></i></a></li>';
		}else{
			echo '<li class="single"><a href="contacto.php">CONTACTO<i></i></a></li>';
		}
	?>
</ul>