# [Curso de php y sql](https://www.youtube.com/watch?v=iOVXAbI73WM&list=PLH_tVOsiVGznvimA9-znLWKrwxD3zpGoa)

# 1. sistema de inventario

- [repositorio de inventario](https://github.com/Carlos007007/INVENTARIO)

# 2. crear bd 3. crear tablas 4. relaciones tablas 5. backup

`mejor por código`

# 6. estructura de proyecto

`organizar por carpetas según necesidades`

# 7. framework bulma css

`mejor Bootstrap`

# 8. vista principal 9. vista login y 404

`retocando las vistas`

# 10. conectar a base de datos PDO && mysqli, +consulta

- diferencia entre conexión PDO y mysqli_connect()

- Ambas PDO (PHP Data Objects) y mysqli_connect() son formas de conectar PHP a una base de datos MySQL, pero tienen diferentes aspectos:

  - PDO es una interfaz orientada a objetos, utiliza objetos y métodos para interactuar con la base de datos.
  - mysqli_connect() es una función procedimental, más tradicional y utiliza funciones para realizar operaciones en la base de datos.

  - PDO es más versátil puede conectarse a varios tipos de bases de datos.
  - mysqli_connect() específicamente para MySQL y no es compatible con otras bases de datos.

  - PDO lanza excepciones cuando se produce un error en la base de datos.
  - mysqli_connect() requiere que verifiques manualmente los errores

```php
`sql.php`
<?php

    /********************************************************************************************
     * $conexion = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $contraseña);    *
     *********************************************************************************************/
    /*
    function conexion()
    {
        // Definición de los parámetros de conexión
        $host = 'localhost'; // Dirección del servidor de la base de datos
        $usuario = 'root'; // Nombre de usuario de la base de datos
        $contraseña = ''; // Contraseña de la base de datos (en este caso, vacía)
        $base_de_datos = 'puertoaviles'; // Nombre de la base de datos a la que se quiere conectar

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
    */

    /****************************************************************
     *  mysqli_connect($hostname, $username, $password, $database); *
     ****************************************************************/
    /*
    // Definición de los parámetros de conexión
    $hostname = "127.0.0.1"; // Dirección del servidor de la base de datos (localhost en este caso)
    $database = "puertoaviles"; // Nombre de la base de datos a la que se quiere conectar
    $username = "root"; // Nombre de usuario de la base de datos
    $password = ""; // Contraseña de la base de datos (en este caso, vacía)

    // Establecer la conexión con la base de datos utilizando mysqli_connect()
    $conexion = mysqli_connect($hostname, $username, $password, $database);

    // Establecer el juego de caracteres UTF-8 para la conexión
    mysqli_set_charset($conexion, "utf8");

    // Verificar si la conexión fue exitosa
    if (!$conexion) {
        // Si la conexión falla, muestra un mensaje de error y termina la ejecución del script
        die("Error de conexión: " . mysqli_connect_error());
    }
    // En este punto, la conexión ha sido establecida con éxito y está lista para ser utilizada para ejecutar consultas SQL
    */
```

```php
`home.php`
<?php
    /*
    // Incluir el archivo de conexión a la base de datos
    require '../sql.php';

    // Establecer la conexión a la base de datos
    $conexion = conexion();

    // Realizar la consulta SQL para seleccionar todos los registros de la tabla 'flag'
    $consulta = $conexion->query("SELECT * FROM flag");

    // Comenzar la construcción de la tabla HTML
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>#</th>";
    echo "<th scope='col'>Valor</th>";
    echo "<th scope='col'>Descripción</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Iterar a través de los resultados de la consulta y mostrar cada fila en la tabla
    foreach ($consulta as $fila) {
        echo "<tr>";
        echo "<th scope='row'>" . $fila['IDFLAG'] . "</th>";
        echo "<td>" . $fila['VALFLG_FLG'] . "</td>";
        echo "<td>" . $fila['DESC_FLG'] . "</td>";
        echo "</tr>";
    }

    // Cerrar la sección de la tabla HTML
    echo "</tbody>";
    echo "</table>";

    // cerrar sesión PDO
    $consulta = null;
    */
?>

<?php
    /*
    function getFlags()
    {
        require '../sql.php'; // Se incluye el archivo de conexión a la base de datos
        // Consulta SQL para obtener los datos de la tabla de flags
        $queryData = "SELECT * FROM flag";
        // Ejecución de la consulta
        $flags = $conexion->query($queryData);
        // Arreglo para almacenar los datos de las flags
        $salida = [];
        // Iteración sobre los resultados de la consulta
        while ($rowDatos = mysqli_fetch_assoc($flags)) {
            // Extracción de los datos de cada fila
            $id = $rowDatos['IDFLAG'];
            $valor = $rowDatos['VALFLG_FLG'];
            $descripcion = $rowDatos['DESC_FLG'];
            // Creación de un arreglo asociativo con los datos de la flag actual
            $arrayValor = array("id" => $id, "valor" => $valor, "descripcion" => $descripcion);
            // Agregamos el arreglo asociativo al arreglo de salida
            $salida[] = $arrayValor;
        }
        // Liberar el resultado de la consulta
        mysqli_free_result($flags);
        // Retornar el arreglo con los datos de las flags
        return $salida;
    }
    // Llamada a la función para obtener los datos de las flags
    $consulta = getFlags();
    // Iteración sobre el arreglo de flags para imprimir los datos
    foreach ($consulta as $c) {
        // Impresión de los datos de la flag actual
        echo '<pre>';
        print_r($c);
        echo '</pre>';
    }
    */
?>
```

# 11. validar formularios con expresiones regulares

```php
    function verificar_datos($filtro, $cadena)
    {
        if (preg_match("/^" . $filtro . "$/", $cadena)) {
            return false;
        } else {
            return true;
        }
    }

    /*
    $nombre = "Granped";

    if (verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{6,10}", $nombre)) {
        echo "El formato no es correcto";
    }
    */
```

# 12. limpiar los textos

```php
   // limiar los textos de sus etiquetas
    function limpiar_cadena($cadena)
    {
        $cadena = trim($cadena); // elimina los espacios  principio/final
        $cadena = stripslashes($cadena); // Descomilla una cadena entre comillas
        $cadena = str_ireplace("<script>", "", $cadena);
        $cadena = str_ireplace("</script>", "", $cadena);
        $cadena = str_ireplace("<script src", "", $cadena);
        $cadena = str_ireplace("<script type=", "", $cadena);
        $cadena = str_ireplace("SELECT * FROM", "", $cadena);
        $cadena = str_ireplace("DELETE FROM", "", $cadena);
        $cadena = str_ireplace("INSERT INTO", "", $cadena);
        $cadena = str_ireplace("DROP TABLE", "", $cadena);
        $cadena = str_ireplace("DROP DATABASE", "", $cadena);
        $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
        $cadena = str_ireplace("SHOW TABLES;", "", $cadena);
        $cadena = str_ireplace("SHOW DATABASES;", "", $cadena);
        $cadena = str_ireplace("<?php", "", $cadena);
        $cadena = str_ireplace("?>", "", $cadena);
        $cadena = str_ireplace("--", "", $cadena);
        $cadena = str_ireplace("^", "", $cadena);
        $cadena = str_ireplace("<", "", $cadena);
        $cadena = str_ireplace("[", "", $cadena);
        $cadena = str_ireplace("]",  "", $cadena);
        $cadena = str_ireplace("==", "", $cadena);
        $cadena = str_ireplace(";", "", $cadena);
        $cadena = str_ireplace("::", "", $cadena);
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);
        return $cadena;
    }
```

# 13. unir Camel

```php
    function renombrar_fotos($nombre) {
        $nombre = str_ireplace(" ", "_", $nombre);
        $nombre = str_ireplace("/", "-", $nombre);
        $nombre = str_ireplace("#", "-", $nombre);
        $nombre = str_ireplace("-", "-", $nombre);
        $nombre = str_ireplace("$", "-", $nombre);
        $nombre = str_ireplace(".", "-", $nombre);
        $nombre = str_ireplace(",", "-", $nombre);
        $nombre = $nombre . "_" . rand(0, 100);
        return $nombre;
    }
```

# 14. información pie de páguina

`un poco chorradita`

# 15. enviar formulario con ajax y js

`un poco chorradita`

# 16. crear vistas usuario

`un poco chorradita`

# 17. CRUD

`prepara el formulario y chorradas`

# 18. CRUD

`prepara el formulario y hace que para insertar un email consulta que no este ya en bd`

# 19. CRUD inserter

```php

`crud_create`

<?php
    function obtenerSiguienteId()
    {
        require '../sql.php';
        try {
            $consulta = conexion();
            $id = $consulta->query("SELECT MAX(ID_US) FROM claves")->fetchColumn();
            $id++;
            return $id;
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    // obtener datos
    $id = obtenerSiguienteId();
    $usuario = 'granped';
    try {
        // Establecer conexión
        $consulta = conexion();
        // Preparar la consulta SQL con valores escapados
        $cadena = "INSERT INTO puertoaviles.claves (ID_US, NOMBRE_US, PASS_US) VALUES (:id, :nombre, :pass)";
        $consulta_preparada = $consulta->prepare($cadena);
        $consulta_preparada->bindParam(':id', $id);
        $consulta_preparada->bindParam(':nombre', $usuario);
        $consulta_preparada->bindParam(':pass', $usuario);
        // $marcadores = [
        //     ":id" => $id,
        //     ":nombre" => $usuario,
        //     ":pass" => $usuario,
        // ];
        //
        // if ($consulta_preparada->execute($marcadores)) {
        if ($consulta_preparada->execute()) {
            echo $cadena;
            echo "<hr>";
            echo "Consulta ejecutada correctamente.";
        } else {
            echo "Error al ejecutar la consulta.";
        }
    } catch (\Throwable $th) {
        throw $th;
    }
```

# 20. inicio de sesión consultando si existe en bd

`interesante pero parecido intentar ccreando token`

# 21. cerrar de sesión

`nada nuevo`

# htmlspecialchars()

[documentación oficial](https://www.php.net/manual/es/function.htmlspecialchars)

```php
    <?php
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?>
```

<!-- 10. 19. -->
