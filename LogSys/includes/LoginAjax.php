<?php 
	include_once('conexion.php');
	$mensajeOK=false;
	$mensajeError="El Sistema no esta disponible";
	if(isset($_POST['Usuario'],$_POST['Contrasena'])):
		if($_POST['Usuario']!=""):
			if($_POST['Contrasena']!=""):
				$Usuario=$_POST['Usuario'];
				$Contraseña=$_POST['Contrasena'];
				$consulta=pg_query($conexion2,("Select * from Usuario where Usuario='$Usuario' and Contrasena='$Contrasena'"));
				if(pg_num_rows($consulta)>0):
					$mensajeOK=true;
					$Usua=pg_fetch_array($consulta);
					session_start();
					$_SESSION['Id']=$Usua[0];//	names of row in data base
					$_SESSION['Usuario']=$Usua[1];//  names of row in data base
					$mensajeError='Logueado correctamente ok!!';
				else:
					$mensajeError='Usuario o Contraseña Incorrecto2';	
				endif;
			else:
				$mensajeError=' Contraseña Incorrecta';	
			endif;
		else:
			$mensajeError=' Usuario no existe';		
		endif;	
	else:
		$mensajeError='Todos los datos son requeridos';	
	endif;	
	$salidaJson = array('respuesta' => $mensajeOK , 'mensaje' => $mensajeError );
	echo json_encode($salidaJson);
?>