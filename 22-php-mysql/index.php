<?php 

// Conectar a la base de datos
// Host, user, password, database
$conexion = mysqli_connect("localhost", "root", "erinhannon21", "phpmysql");

// Comprobar si la conexión es correcta
if(mysqli_connect_errno()) {
    echo "La conexión a la base de datos ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexión realizada correctamente";
}

echo "<br>";
echo "<br>";

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)) {
    echo "<h1>".$nota['titulo']."</h1>";
    echo $nota['descripcion'];
    echo "<br>";
}

