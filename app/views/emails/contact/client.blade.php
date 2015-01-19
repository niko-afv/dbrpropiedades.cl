<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hola {{ $userName }}</h2>

		<div>
		    @if( isset($userUrl) )
            <p>Te ha interesado una de nuestra propiedades.</p>
            Propiedad : {{ $userUrl }}
            @endif

			<p>
			Gracias por contactarte con nosotros.<br/>
			En la brevedad nos comunicaremos contigo
			</p>

			Dbr Propiedades.
		</div>
	</body>
</html>


<!--
 //URL::to('password/reset', array("dasdadaad345234234"))
-->