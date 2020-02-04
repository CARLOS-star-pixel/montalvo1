<?php
	$conexion = new MySQLi('localhost','root','','usp_si2_laboratorio11');

	session_start();	
	
	$user = $_POST['form-user'];
	$pass = $_POST['form-pass'];
	
	$sql = "select * from usuario
			where user='$user' and pass='$pass'";
	$query = $conexion->query($sql);
	$fetch = $query->fetch_object();
	
	if(isset($fetch)){
		$_SESSION["idUsuario"] = "1";
		if($fetch->tipo == 1){
			$_SESSION["editar"] = true;
		}else{
			$_SESSION["editar"] = false;
		}
		if($fetch->tipo == 1 || $fetch->tipo == 2){
			header("Location:index.html");	
		}else if($fetch->tipo == 3){
			echo("2");
		}
		
	}else{
		echo'<script type="text/javascript">
        alert("Nombre de usuario y/o password incorrecto");
		window.location.href="login.php";
        </script>';
	}
?>