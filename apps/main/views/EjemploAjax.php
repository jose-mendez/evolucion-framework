
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bienbenidos a Evolucion Framework</title>
<?php include_css("Default.css"); ?>
{get_head}
</head>
<body>

<div  align="center">
<div id="container">
	<h1>Ejemplo Ajax en Evolucion Framework!</h1>

	<div id="body">
		<p>Esta es una pagina de ejemplo generada en Evolucion Framework</p>
		
            <p>{img_loading}</p>
            <p>{contenido}</p>

		<form name="form1">
        
<div id="body"><input name="ajax1" id="edit" type="text" onkeyup="{getAjax1}" /> Escribir algo en la caja de texto para hacer una llamada por ajax al archivo unit.php </div>
<div id="body"><input name="ajax2" id="edit" type="text"  onkeyup="{getAjax2}"  /> Escribir algo en la caja de texto para hacer una llamada por ajax al archivo unit2.php </div>
<div id="body"><input name="ajax3" id="bot" type="button" value="click"  onclick="{sendAjax}" />  </div>
</form>
		
	</div>


	<p class="footer">Pagina generada en <strong>{timeElapsed}</strong> segundos</p>
</div>
</div>
</body>
</html>