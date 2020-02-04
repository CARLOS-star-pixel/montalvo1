<?php
	session_start();
	if(!isset($_SESSION["idUsuario"])){
		header("Location:login.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<form action="CerrarSesion.php">
        	<input type="submit" value="Cerrar Sesión">
            <table id="tblArticulos" class="table table-striped table-bordered table-condensed table-hover">
        	<thead>
            	<tr>
                	<th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Operaciones</th>
                </tr>
            </thead>            
            <tbody></tbody>
            <tfoot>
            	<tr>
                	<th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Operaciones</th>
                </tr>
            </tfoot>            	            	            
        </table>
</body>
</html>