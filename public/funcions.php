<?php
require dirname(__FILE__) . "/../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio Funciones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
	<header class="bg-dark text-white p-3">
		<h1>Ejercicio Funciones</h1>
	</header>

    <main>
    	<div class="bg-secondary text-white p-3">
            <h2>Insercción</h2>
            <span><?php echo insert("Insercción", ['Campo 1' => 'Valor 1', 'Campo 2' => 'Valor 1']); ?></span>
            <span><?php echo insertV2("insert into taula (camps) values (valors)","pruebas", ['hola' => 'sadds', 'asd' => 'adios']); ?></span>
        </div>
        <div class="bg-secondary text-white p-3">
        	<h2>Operaciones</h2>
        	<table class="table table-striped text-white">
        		<thead>
        			<tr>
        				<th scope="col">Operación</th>
        				<th scope="col">Resultado</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>Suma</td>
        				<td><?php echo mostrarOperacion("+", 50, 50) ?></td>
        			</tr>
        			<tr>
        				<td>Resta</td>
        				<td><?php echo mostrarOperacion("-", 150, 50) ?></td>
        			</tr>
        			<tr>
        				<td>Multiplicación</td>
        				<td><?php echo mostrarOperacion("x", 25, 14) ?></td>
        			</tr>
        		</tbody>
        	</table>
        </div>
    </main>
</body>
<footer class="bg-dark text-white p-3">
	<small>Zaira Bravo Sanchez - 2nd DAW</small>
</footer>
</html>