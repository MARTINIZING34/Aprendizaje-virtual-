<!DOCTYPE html>
<html>
<head>
	<title>Pentágono</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="description" content="figuras">
	<meta name="keywords" content="figuras, geometria, formas">
	<link rel="shortcut icon"  href="img/logodos.png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet"  href="style-cuadrado.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<script src="https://kit.fontawesome.com/1f67e4ca53.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="container">
			<a href="E:\respaldo Lenin\3 inf Martín Bravo\Diseño web\Bloque 3\Martín Bravo pag\proyectohtml\index.html"><img  width="" height="" src="img/logodos.png" class="logo"></a>
			<nav>
				<a href="E:\respaldo Lenin\3 inf Martín Bravo\Diseño web\Bloque 3\Martín Bravo pag\proyectohtml\index.html">Inicio</a>
				
				<a href="#servicios">Definición</a>
				
				<a href="#contáctanos">Contáctanos</a>
			</nav>
			<a href=""class="hamb"><i class="fas fa-bars"></i></a>
		</div>
	</header>
	<main>
		<section id="inicio">
			<img  src="img/bannerdos.png">
			<div class="bloque-inicio">
				<h1></h1>
				<p></p>
				<a href="#servicios" class="boton boton-rojo">Descubir</a>
			</div>
		</section>
		
		<section id="servicios" class="sección">
			<div  class="container">
				<div class="row">
					<div class=" columna33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-imágen cuadrado-perfecto">
								<img src="img/pentrex.png">
							</div>
							<div class="bloque-contenido-servicio">
								<h3>Pentágono</h3>
								<p>Es una figura geométrica de cinco lados que forman cinco ángulos interiores donde la apotema es igual al radio del círculo inscrito, sus lados son iguales y cada ángulo interno mide 108 grados.</p>
								
							</div>
						</div> 
					</div>
					<div class=" columna33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-imágen cuadrado-perfecto">
								<img src="img/penfor.png">
							</div>
							<div id="def" class="bloque-contenido-servicio">
								<h3>Fórmulas</h3>
								<p>Las siguientes fórmulas nos ayudarán a calcular diferentes datos ya sean  el área o el perímetro que son los más comunes de la figura, remplazando los datos del ejercicio en su lugar correspondiente.</p>
								
							</div>
						</div>
					</div>
					<div class=" columna33 columna-mobile-100">
						<div class="bloque-servicio">
							<div class="bloque-imágen cuadrado-perfecto">
								<img src="img/pendef.png">
							</div>
							<div id="def" class="bloque-contenido-servicio deff">
								<h3>Definiciones</h3>
								<p>Tomar en cuenta que al reemplazar los datos de el ejercicio la definición de cada uno de ellos corresponda con los de las fórmulas para que los cálculos sean correctos.</p>

							</div>
						</div>
					</div>
					<iframe width="1366" height="736" src="https://www.youtube.com/embed/RQAkwcA1cTo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
				</div>
			</div>
		</section>
		
			</div>
		</section>
		<section id="contáctanos" class="sección">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2510.193497589817!2d-79.02064738535542!3d-2.9071621490958894!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1616685258759!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<div class="container-fluid">
				<div class="row">
					<div class="columna columna50 empujar-50 columna-mobile-100 empujar-mobile-0 sinpadding-mobile">
						<form action="index.php" method="post">
							<div class="form-block">
								<input class="form-control" type="text" name="nombre" placeholder="Nombre">				
							</div>
							<div class="form-block">
								<input class="form-control" type="mail" name="correo" placeholder="Correo">				
							</div>
							<div class="form-block">
								<textarea name="mensaje" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-block bloqueultimo">
								<input type="submit" value="Enviar" class="boton boton-negro">
							</div>
							<!--Código php-->
							<?php
								if($_SERVER["REQUEST_METHOD"]=="POST")
								{
									$nombre = $_POST["nombre"];
									$correo = $_POST["correo"];
									$mensaje = $_POST["mensaje"];

									IF(isset($nombre))
									{
										IF(isset($correo))
										{
											IF(isset($mensaje))
											{
												$para = "homero64.vuele@gmail.com";
												$asunto = "Esto es una prueba";
												$cuerpo = $nombre."\n".$correo."\n".$mensaje;
												$adicional = "from:martinbravo1011@gmail.com";
												mail($para, $asunto, $cuerpo, $adicional);
											?>
												<p>Envío exitoso</p>
											<?php
											}
										}
									}
								}





							?>
						</form>
					</div>
				</div>
			</div>
			
		</section>
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="columna columna-25 columna-mobile-100"><br>
					<img src="img/logodos.png" class="logo-footer"><br><br>
					<p>Para más información o sugerencias llene el formulario y será contactado para cualquier duda.</p><br>					
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Datos de contacto</h3>
						<ul>
							<li type="disc" >martinbravo1016@gmail.com</li>
							<li type="disc" >0994739474</li>
							<li type="disc" >Av. 10 de agosto<li>
							<li type="disc" >Cuenca - Ecuador</li>
						</ul>

					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>Temas estudiados</h3>
						<ul>
							<li type="disc" color="black" ><ahref="">Aprendizaje virtual</a></li>
							<li type="disc" ><ahref="">Gráficas</a></li>
							<li type="disc" ><ahref="">Definiciones</a></li>
						</ul>
					</div>
					<div class="red" class="columna columna-25 redes columna-mobile-100">
						<h3>Redes sociales</h3>
						
							<a target="_blank" href="https://www.facebook.com/"><img class="redes" width="40px" src="img/facebook.png"></a>
							<a target="_blank" href="https://twitter.com/"><img class="redes1" width="40px" src="img/tw.png"></a>
							<a target="_blank" href="https://www.instagram.com/"><img class="redes2" width="40px" src="img/instagram.png"></a>
					
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Derechos reservados - 2021
			</div>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script type="js/funciones.js"></script>
</body>
</html>