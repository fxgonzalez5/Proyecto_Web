<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<?php  
	//extract($_POST) // Extrae todos los valores
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$cedula = $_POST['cedula'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$fechaNacimiento = $_POST['fechaNacimiento'];
	$correo = $_POST['correo'];
	echo "Datos Recibidos:<br>";
	for ($i=0; $i <= 10; $i++) { 
		echo $i ." <strong class='colorRojo'> Cédula: </strong> <span class='colorMarron'>" .$cedula ."</span> "
		."<strong class='colorRojo'> Nombres: </strong> <span class='colorMarron'>" .$nombres ."</span> "
		."<strong class='colorRojo'> Apellidos: </strong> <span class='colorMarron'>" .$apellidos ."</span><br>";
	}
	
?>