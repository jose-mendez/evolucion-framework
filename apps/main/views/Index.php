
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienbenidos a Evolucion Framework</title>
<?php include_css("Default.css"); ?>
</head>
<body>

<div  align="center">
<div id="container">
	<h1>Bienvenidos a Evolucion Framework!</h1>

	<div id="body">
		<p>Esta es una pagina de ejemplo generada en Evolucion Framework</p>

		<p>Para modificar esta vista ir a:</p>
		<code>apps/main/views/Index.php</code>

		<p>Para modificar el control ir a:</p>
		<code>apps/main/controller/Index_controller.php</code>

		
	</div>

		<div id="body">
		<p>Estos son algunos ejemplos hechos en Evolucion Framework</p>

		<ul>
        <li><a href="<?php echo $config->site_url ?>index.php/main/Index_controller/EjemploAjax/">Link 1 Ejemplo Ajax</a></li>
        <li><a href="<?php echo $config->site_url ?>index.php/main/Index_controller/EjemploCrud/">Link 2 Ejemplo Crud Ajax</a></li>
        <li>Link 2</li>
        </ul>
        
		</div>

	<p class="footer">Pagina generada en <strong>{timeElapsed}</strong> segundos</p>
</div>
</div>
</body>
</html>