<?php
function conexion()
{
    // Definición de los parámetros de conexión
    $host = 'host.docker.internal'; // Dirección del servidor de la bd "IP del host Docker" 
    $usuario = 'root';
    $contraseña = 'root';
    $base_de_datos = 'huertamesa';

    try {
        // Intenta establecer una conexión con la base de datos utilizando PDO
        $conexion = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $contraseña);

        // Configura el modo de manejo de errores para que PDO lance excepciones en caso de error
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retorna el objeto de conexión si la conexión es exitosa
        return $conexion;
    } catch (PDOException $e) {
        // En caso de que ocurra un error en la conexión, captura la excepción y muestra un mensaje
        echo "Error de conexión: " . $e->getMessage();
        exit; // Termina la ejecución del script
    }
}
/*
// Incluir el archivo de conexión a la base de datos
require '../sql.php';
// Establecer la conexión a la base de datos
$conexion = conexion();

// VERIFICAR si la conexión fue exitosa
if (!$conexion) {
    // Si la conexión falla, muestra un mensaje de error y termina la ejecución del script
    die("Error de conexión: " . mysqli_connect_error());
}
if ($conexion) {
    echo "<h1>Conectado exitosamente</h1>";
}
*/