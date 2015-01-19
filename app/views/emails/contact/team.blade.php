<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hola Estimado</h2>

		<div>
			<p>Un usuario se ha contactado contigo</p>
			<br/>

			Nombre: {{ $userName }}<br/>
			Asunto: {{ $userSubject }}<br/>
			E-Mail: {{ $userEmail }}<br/>
			Mensaje: {{ $userMessage }}<br/>

			@if( isset($userUrl) )
            <p>Está interesado en una propiedad.</p>
            Propiedad : {{ $userUrl }}
			@endif

            <br/>
			Dbr Propiedades.
		</div>
	</body>
</html>


<!--
 //URL::to('password/reset', array("dasdadaad345234234"))
-->