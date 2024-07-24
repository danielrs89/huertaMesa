|# [Curso de php](https://www.youtube.com/watch?v=lLsyzBggW_o&list=PLH_tVOsiVGzmnl7ImSmhIw5qb9Sy5KJRE)|
|--------------------------|
| [1. ¿Que es?](#1-que-es) |
| [2. ¿Que se necesita?](#2-que-se-necesita) |
| [3. entorno de desarrollo](#3-entorno-de-desarrollo) |
| [4. hacer comentarios](#4-hacer-comentarios) |
| [5. tipos de datos](#5-tipos-de-datos) |
| [6. definir, modificar y mostrar variables](#6-definir-modificar-y-mostrar-variables) |
| [7. constantes](#7-constantes) |
| [8. array](#8-array) |
| [9. contatenar e interpolar](#9-contatenar-e-interpolar) |
| [10. operadores aritméticos](#10-operadores-aritméticos) |
| [11. operadores asignación](#11-operadores-asignación) |
| [12. asignación referencia](#12-asignación-referencia) |
| [13. operadores de comparación](#13-operadores-de-comparación) |
| [14. operadores lógicos](#14-operadores-lógicos) |
| [15. operadores de incremento y decremento](#15-operadores-de-incremento-y-decremento) |
| [16. - 24. condicionales, operador ternario, ejemplos](#16---24-condicionales-operador-ternario-ejemplos) |
| [25. switch](#25-switch) |
| [26. seleccion multiple match](#26-seleccion-multiple-match) |
| [27. while](#27-while) |
| [28. doWhile](#28-dowhile) |
| [29. for](#29-for) |
| [30. foreach](#30-foreach) |
| [31. salir o detener](#31-salir-o-detener) |
| [32. incluir un archivo](#32-incluir-un-archivo) |
| [33. funciones](#33-funciones) |
| [34. incluir o llamar una funcion](#34-incluir-o-llamar-una-funcion) |
| [35. formatear string a mayusculas y minusculas](#35-formatear-string-a-mayusculas-y-minusculas) |
| [36. contar caracteres y palabra de un string](#36-contar-caracteres-y-palabra-de-un-string) |
| [37. convertir un string en array](#37-convertir-un-string-en-array) |
| [38. funciones matemáticas](#38-funciones-matemáticas) |
| [39. formatear números](#39-formatear-números) |
| [40. obtener hora y fecha](#40-obtener-hora-y-fecha) |
| [41. obtener hora y fecha españa](#41-obtener-hora-y-fecha-españa) |
| [42. encriptar](#42-encriptar) |
| [43. formularios GET / POST](#43-formularios-get--post) |
| [44. select y checkbox](#44-select-y-checkbox) |
| [45. variable vacía o definida](#45-variable-vacía-o-definida) |
| [46. subir archivos a servidor con formulario](#46-subir-archivos-a-servidor-con-formulario) |
| [47. subir archivos a servidor con ajax](#47-subir-archivos-a-servidor-con-ajax) |
| [48. coockies crear y eliminar](#48-coockies-crear-y-eliminar) |
| [49. manejo de sesiones](#49-manejo-de-sesiones) |
| [50. diferencia entre cookies y sesiones](#50-diferencia-entre-cookies-y-sesiones) |
| [51. redireccionar páginas](#51-redireccionar-páginas) |
| [52. expresiones regulares](#52-expresiones-regulares) |
| [llamada y manejo api](#llamada-y-manejo-api) |
| [recursividad](#recursividad) |
| [logear](#logear) |
| [mostrar imagenes de un directorio](#mostrar-imagenes-de-un-directorio) |



---
---
---



# 1. ¿Que es?

- Lenguaje interpretado del lado del servidor

# 2. ¿Que se necesita?

- instalar [laragon-wamp](https://laragon.org/download/)
- desmarcar todo </br> ![alt text](image.png)
- [localhost](http://localhost/)
  >
- descargar [phpmyadmin](https://www.phpmyadmin.net/)
- descomprimir esta ruta </br> ![alt text](image-1.png)
- [localhost/phpmyadmin](http://localhost/phpmyadmin)

```sql
    root
```

- para cambiar versiones de php
- descargar [versiones de php](https://windows.php.net/download/)
- ruta donde descomprimir </br> ![alt text](image-2.png)

## 2.2 Docker
[PHP en docker](https://www.youtube.com/watch?v=-XnfBItOBHE)

# 3. entorno de desarrollo

- si se trata de un archivo .php solo hace falta el inicio `<?php`
- si se combina con html hay que cerrar `<?php ?>`

# 4. hacer comentarios

- de una linea // y \#
- de bloque /\* \*/

# 5. tipos de datos

- para saber el tipo que es

```php
    var_dump(true);
```

# 6. definir, modificar y mostrar variables

```php
    $cadena = "texto";
```

\* OJO palabras reservadas \*

# 7. constantes

```php
    const CADENA = "texto";

    define('COLORES', array(
        'morado',
        'azul',
        'verde'
    ));
```

\* OJO constantes predefinidas \*

# 8. array

- escalares

```php
    $numeros = array(1, 2, 3, 4, 5);
```

- asociativos

```php
    $productos = array(
    "1" => array(
        "nombre" => "Camiseta",
        "precio" => 10
    ),
    "2" => array(
        "nombre" => "Pantalón",
        "precio" => 20
    )
);
```

- multidimensionales

```php
    $matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
```

# 9. contatenar e interpolar

```php
    $nombre ="danie";
    $apellidos ="rosa";
    echo $nombre." ".$apellidos;
    echo " Hola que ase $nombre {$apellidos}";
```

# 10. operadores aritméticos

| Nombre         | Símbolo PHP |
| -------------- | ----------- |
| Suma           | +           |
| Resta          | -           |
| Multiplicación | \*          |
| División       | /           |
| Resto          | %           |
| Exponente      | \*\*        |

# 11. operadores asignación

| Nombre    | Símbolo PHP |
| --------- | ----------- |
| Suma      | +=          |
| Resta     | -=          |
| concatena | .=          |

```php
    $aux = "Hola";
    $aux .= " Danie";
```

# 12. asignación referencia

- cambia su valor con la variable a la que está apuntando (si cambia padre tambien cambia hijo2)

```php
    $padre = "HOLA";
    $hijo1 = $padre;
    $hijo2 = &$padre;
```

# 13. operadores de comparación

| Ejemplo     | Símbolo (Nombre)   | Resultado |
| ----------- | ------------------ | --------- |
| 1 == "1"    | == (Igual)         | TRUE      |
| 10 === "10" | === (Idéntico)     | FALSE     |
| 7 != "7"    | != (Diferente)     | FALSE     |
| 21 <> "21"  | <> (Diferente)     | FALSE     |
| 19 !== "19" | !== (No idéntico)  | TRUE      |
| 7 < 4       | < (Menor que)      | FALSE     |
| 7 > 4       | > (Mayor que)      | TRUE      |
| 2 <= 2      | <= (Menor o igual) | TRUE      |
| 3 >= 7      | >= (Mayor o igual) | FALSE     |

# 14. operadores lógicos

| Símbolo | Resultado |
| ------- | --------- |
| and     | And (y)   |
| or      | Or (o)    |
| !       | Not (no)  |
| &&      | And (y)   |
|         |           |

# 15. operadores de incremento y decremento

```php
    ++$preIncremento
    $postDecremento--
```

# 16. - 24. condicionales, operador ternario, ejemplos

```php
    // operador ternario
    $retVal = (1 == 1) ?  "a" :  "b";

    if (condition) { } else { }

    <?php if (condition) :?>
        //html
    <?PHP endif; ?>
```

# 25. switch

```php
    $dia = "1";
    switch ($dia) {
    case 1:
        echo "Lunes";
        break;

    default:
        echo "Descanso";
        break;
}
```

\* hace un === (idéntico)\*

# 26. seleccion multiple match

- en teoria hace lo que switch pero más comodo
- a mi NO me funfiona

```php
    $a = 1;

    $x = 2;
    $y = 3;
    $z = 4;

    $resultado = match ($a) {
        $x => "X",
        $y => "Y",
        $z => "Z",
        default => "No hay coincidencias"
    };

    echo $resultado;
```

# 27. while

```php
    $cont = 0;

    while ($contadorUnico <= 10) {
        echo "Numero: $cont\n";
        $cont++;
    };
```

# 28. doWhile

```php
   $cont = 1;
$tabla = 5;

    do {

        echo "$tabla x  $cont = " . ($tabla * $cont) . "\n";
        $cont++;
    } while ($cont <= 10);
```

# 29. for

# 30. foreach

```php
    $cadena = ["Ola", "que", "ase"];
    for ($i = 0; $i < count($cadena); $i++) {
        echo "$cadena[$i] ";
    };

    echo "--------";

    foreach ($cadena as $c) {
        echo " $c";
    };
```

# 31. salir o detener

```php
   continue;
   break;
```

# 32. incluir un archivo

> **_ REUTILIZAR CODIGO _**

- include = si falla salta un warning y sigue ejecutando
- require = si falla salta un fatal error y no continua
- \_once = ejecuta solo una vez

```php
    include("ruta_archivo.php");
    include "ruta_archivo.php";

    include_once("ruta_archivo.php");
    include_once "ruta_archivo.php";

    require("ruta_archivo.php");
    require "ruta_archivo.php";

    require_once("ruta_archivo.php");
    require_once "ruta_archivo.php";
```

# 33. funciones

```php
    function saludo($nombre)
    {
        return "Hola que ase: $nombre";
    };

    echo saludo("Daniè\n");

    $saludo = function ($nombre) {
        return "Hola que ase: $nombre";
    };

    echo $saludo("Daniè\n");

    // apartir de php7.4
    $saludo = fn ($nombre) => "Hola que ase: $nombre";

    echo $saludo("Daniè");
```

# 34. incluir o llamar una funcion

- investigar como tener mas de una funcion en un archivo y llamar la que quiera

# 35. formatear string a mayusculas y minusculas

```php
    strtolower($cadena); // minusculas
    strtoupper($cadena); // mayusculas
    ucwords($cadena); // primera letra
```

# 36. contar caracteres y palabra de un string

```php
    strlen($cadena); //cuenta caracteres
    str_word_count($cadena); // cuenta palabras

    strpos($cadena, "Lorem"); // primera coincidencia, caseSensitive
    str_contains($cadena, 'lorem'); // contiene, NO caseSensitive

    strcmp($cadena, $cadena2); // cadena2  => -1 menor, 0 igual, 1 mayor

    str_replace(' ', '', $cadena); // que busco, porque lo cambia, donde sustituye
    str_split($cadena, 1) // lo separa 1(dfto) y convierte array

    var_dump($cadena); // tipoDato(longitud)"textCadena"
```

# 37. convertir un string en array

```php
    str_split($cadena); // lo separa 1(dfto) y convierte array

    explode("|", $cadena); // por cada separador crea un indice en el array

    // ejemplo
    /*
        La cadena elimina el punto cambia los espacios por separado y de cada separador creas un indice dentro de un array, cuando imprime pone la primera letra de cada indice en mayuscula
    */
    $cadena = "Lorem ipsum dolor.";

    $cadena2 = str_replace(".", "", $cadena);
    $cadena2 = str_replace(" ", "|", $cadena2);
    $cadena2 = explode("|", $cadena2, -1);// se puede definir el número que divide

    var_dump($cadena2);

    foreach ($cadena2 as $c) {
        print ucfirst($c) . " ";
    };
```

# 38. funciones matemáticas

- Documentación oficial PHP - [Funciones matemáticas](https://www.php.net/manual/es/ref.math.php)

```php
    round(rand(1, 10) / rand(10, 100), 2); //float redondeado en 2 decimales
```

# 39. formatear números

```php
    print number_format(rand(), 3, ".", ","); // 1,805,578,485.000
```

# 40. obtener hora y fecha

# 41. obtener hora y fecha españa

```php
    date_default_timezone_set("Europe/Madrid");
    $fecha = date("d-m-Y");
    $hora = date("H:m:s");
    echo "Hoy es $fecha \ny son las $hora";
```

# 42. encriptar

> **_ ENCRIPTAR CONTRASEÑAS _**

- hash = algoritmo que transforma una cadena en nueva serie de carácteres con una longitud fija

- es menos seguro encriptar solo con 1 cifrado, con **HASH pasa por doble cifrado**

```php
    // tipos de encriptación
    print sha1("Daniè") . "<br>";
    print md5("Daniè") . "<br>";

    // encriptación con hash
    print hash("sha3-256", "Daniè");

    // tipos de cifrado
    foreach (hash_algos() as $h) {
        print $h . " - " . hash($h, "Daniè") . "<br>";
    }

    // encriptar contraseñas y verificar TRUE/FALSE
    var_dump(password_verify("danie", password_hash("danie", PASSWORD_DEFAULT)));
```

# 43. formularios GET / POST

- la diferencia es en la url
  - post => no se ven (se envian en el cuerpo)
  - get => se ven los datos en la url (esta way para API)

```php
    // index.php
    if (isset($_POST['recuerda'])) {// si es distinto de null
        print "Hola " . $_POST['alias'];
        print " en realidad te llamas " . $_POST['nombre'];
        print " y tu número es el " . $_POST['numero'];
    }

    // \recursos\formulario.php
    <form action="../datos2.php" method="post">
        Nombre <input name="nombre" type="text">
        Alias <input name="alias" type="text">
        <select name="numero">
            <option value=""></option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
        </select>
        Aceptar <input name="recuerda" type="checkbox">
        <button type="submit">Enviar</button>
    </form>

    // ejemplo de la condicion POST/GET
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        // Procesamiento de los datos recibidos por POST
        print "POST -> " . $nombre;
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre = $_GET["nombre"];
        // Procesamiento de los datos recibidos por GET
        print "GET -> " . $nombre;
    }

```

# 44. select y checkbox

- se trata de enviar arrays, es igual pero en e name del formulario poner nombres[]

# 45. variable vacía o definida

- [Funciones de variable](https://www.php.net/manual/es/ref.var.php)
- isset() => NO nula
- empty() => Vacia

```php
    if (!empty($_POST['numeros'])) {
        foreach ($_POST["numeros"] as $n) {
            print $n . "<br>";
        };
    } else print "vacio";
```

# 46. subir archivos a servidor con formulario

- [Ficheros](https://www.php.net/manual/es/function.file.php)

```php

    // subir_archivo-php
    <form action="../datos2.php" method="post" enctype="multipart/form-data">// enctype "atributo necesario para subir archivos
        <button class="btn btn-outline-secondary" type="submit">Enviar</button>
        <input name="fichero" type="file" class="form-control mt-5" accept=".png, .txt">
    </form>

    // datos2.php
    <a class="btn btn-primary" href="./recursos/subir_archivo.php" role="button">DROP</a>

    <?php
    if (isset($_FILES['fichero'])) {
        // devuelve un array con la info del fichero
        /*
        foreach ($_FILES['fichero'] as $fu) {
            print $fu . "<br>";
        };
        */

        // info del fichero despiezada
        /*
        print "Nombre =>    " . $_FILES['fichero']['name'] . "<br>";
        print "Ruta temporal => " . $_FILES['fichero']['tmp_name'] . "<br>";
        print "Tipo =>  " . $_FILES['fichero']['type'] . "<br>";
        print "Error => " . $_FILES['fichero']['error'] . "<br>";
        print "Tamaño =>    " . $_FILES['fichero']['size'] . "<br>";
        */

        // en teoria es cuando metes un formato distinto "NO me funciona
        /*
        if (
            mime_content_type($_FILES['fichero']['type']) != "image/png"
            && mime_content_type($_FILES['fichero']['type']) != "text/plain"
        ) {
            # code...
            echo "El tipo de fichero no está admitido";
            exit();
        }
        */

        // condición por tamaño máximo
        /*
        if (($_FILES['fichero']['size'] / 1024) > 5) { //kB
            echo "pesa mucho";
            exit();
        }
        */

        // si no existe y no se crea
        if (!file_exists("assets")) {
            if (!mkdir("assets", 0777)) {
                print "Error al crear el directorio";
                exit();
            }
        } else {
            if ($_FILES['fichero']['error'] == 0) { // si el fichero esta seleccionado
                // si tipo png y carperta no sxista
                if ($_FILES['fichero']['type'] == "image/png" && !file_exists("assets/img")) {
                    // crea directorio
                    mkdir("assets/img", 0777);
                    // mueve fichero de temp a ruta + nombre
                    if (move_uploaded_file($_FILES['fichero']['tmp_name'], "assets/img/" . $_FILES['fichero']['name'])) {
                        print "Imagen subido con éxito";
                    };
                } elseif ($_FILES['fichero']['type'] == "text/plain" && !file_exists("assets/text")) {
                    mkdir("assets/text", 0777);
                    if (move_uploaded_file($_FILES['fichero']['tmp_name'], "assets/text/" . $_FILES['fichero']['name'])) {
                        print "Texto subido con éxito";
                    };
                } else {
                    print 'Error al subir el archivo';
                    exit(); // si se produce no sgue ejecutando el codigo
                }
            } else { // fichero NO seleccionado
                print "Seleccione un archivo válido";
                exit();
            }
        }
    }
    ?>
```

# 47. subir archivos a servidor con ajax

- `caca la vaca` cuando se necesite buscar información, no merece la pena indagar, muy desactual

```js
const formularios_ajax = document.querySelectorAll(".FormularioAjax");

let enviar_formularios_ajax = (e) => {
  e.preventDefault();

  let enviar = confirm("¿Quieres enviar?"); // Aquí se cambia confirmar() por confirm()

  if (enviar == true) {
    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");

    let encabezados = new Headers();
    let config = {
      method: method,
      headers: encabezados,
      mode: "cors",
      cache: "no-cache",
      body: data,
    };

    fetch(action, config)
      .then((respuesta) => respuesta.text())
      .then((respuesta) => {
        alert(respuesta);
      })
      .catch((err) => {
        console.log("Error => " + err);
      });
  }
};

formularios_ajax.forEach((formularios) => {
  formularios.addEventListener("submit", enviar_formularios_ajax);
});
```

# 48. coockies crear y eliminar

## `cookies` -> nivel local

```php
    <?php
    setcookie("Idioma", "es");
    date_default_timezone_set('Europe/Madrid');
    setcookie("expires", date("d-m-Y H:i"));
    setcookie("name", "Daniè", time() + 1); // segundos
    setcookie("TestCookie", "", time() - 3600, "/~rasmus/", "example.com", 1);

    // setcookie((string $name, $value = "", $expires_or_options = 0, $path = "", $domain = "", $secure = false, $httponly = false))
    // setcookie((name, value, expires, path, domain, secure, httponly))
    setcookie("full", "Daniè", time() + 60 * 60 * 24 * 365, "/", "localhost", false, false);
    ?>

    <a href="datos3.php" class="btn btn-primary">Recargar</a>
    <br>
    <?php
        echo $_COOKIE['Idioma'];
        print "<br>";

        print_r($_COOKIE['expires']);
        print "<br>";

        if (isset($_COOKIE['name'])) {
            print_r($_COOKIE['name']);
        }
        print "<br>";

        if (isset($_COOKIE['full'])) {
            print_r($_COOKIE['full']);
        }
    ?>
```

# 49. manejo de sesiones

## `sesiones` -> nivel servidor

- ejercicio en la carpeta [sesiones](C:\laragon\www\sesiones)

```php
    session_start();
    // asigna a la variable el valor del nombre del archivo
    $_SESSION['actual'] = basename($_SERVER['PHP_SELF']);
    // aqui el alias de un formulario
    $_SESSION['alias'] = $_GET['alias'];
    // destruye todas
    session_destroy();
```

# 50. diferencia entre cookies y sesiones

> `cookies` -> nivel local
>
> `sesiones` -> nivel servidor

# 51. redireccionar páginas

```php
    if (headers_sent()) {
        echo "<script> window.location.href='index.php'</script>"; // redirección con js
        // echo "<script> window.history.back();</script>";
    } else {
        header("Location: index.php"); // redirección con php
    }
```

# 52. expresiones regulares

```php
    if (headers_sent()) {
        echo "<script> window.location.href='index.php'</script>"; // redirección con js
        // echo "<script> window.history.back();</script>";
    } else {
        header("Location: index.php"); // redirección con php
    }
```

# llamada y manejo api

```php
    <?php
    // Realizar la solicitud a la API
    $url = 'https://jsonplaceholder.typicode.com/posts';
    $response = file_get_contents($url);
    // $response = file($url);
    // Decodificar la respuesta JSON
    $data = json_decode($response);

    // Verificar si la decodificación fue exitosa
    if ($data === null) {
      // La decodificación falló
      echo "Error al decodificar JSON";
    } else {
      $id = rand(0, count($data) - 1); // Elige un índice aleatorio dentro del rango de los posts
      $color = "color: rgb(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ");";

      // Imprimir una imagen aleatoria
      echo "<img src='https://picsum.photos/id/{$id}/200/300' alt='{$id}'>";
      // Imprimir el título del post aleatorio
      echo "<div style='$color'>" . $data[$id]->title . "</div>";
    }
    ?>
    <?php
    // Realizar la solicitud a la API
    $url = 'https://jsonplaceholder.typicode.com/posts';
    $response = file_get_contents($url); // todo en la misma cadena
    // $response = file($url); // a
    // Decodificar la respuesta JSON
    $data = json_decode($response);

    // Verificar si la decodificación fue exitosa
    if ($data === null) {
      // La decodificación falló
      echo "Error al decodificar JSON";
    } else {
      $id = rand(0, count($data) - 1); // Elige un índice aleatorio dentro del rango de los posts
      $color = "color: rgb(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ");";

      // Imprimir una imagen aleatoria
      echo "<img src='https://picsum.photos/id/{$id}/200/300' alt='{$id}'>";
      // Imprimir el título del post aleatorio
      echo "<div style='$color'>" . $data[$id]->title . "</div>";
    }
    ?>
    $cadena =  api_imprimir2('https://jsonplaceholder.typicode.com/todos');
        foreach ($cadena as $cad) {
            printf($cad . '<br>');
        }
```

# recursividad

```php
<?php
function recursividad($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursividad($a + 1);
    }
}
?>
```

# logear

```php
<?php

// replace
// El parámetro opcional replace indica cuando el encabezado debe reemplazar un encabezado previo similar o añadir un segundo encabezado del mismo tipo. Por defecto lo reemplazará, pero si se pasa false como segundo argumento se puede forzar múltiples encabezados del mismo tipo. Por ejemplo:
header('WWW-Authenticate: Negotiate');
header('WWW-Authenticate: NTLM', false);
?>
```

# mostrar imagenes de un directorio

```php
<?php
    // Abre el directorio 'fotos' y lo asigna a la variable $gestor
    if ($gestor = opendir('fotos')) {
        echo "<table border='1'>"; // Inicia la tabla HTML con un borde
        echo "<tr>"; // Inicia la primera fila de la tabla
        $i = 0; // Contador para controlar el número de imágenes por fila

        // Lee cada archivo en el directorio 'fotos'
        while (false !== ($archivo = readdir($gestor))) {
            // Ignora los directorios especiales '.' y '..'
            if ($archivo != "." && $archivo != "..") {
                // Si el contador es 4, cierra la fila actual y comienza una nueva fila
                if ($i == 4) {
                    $i = 0;
                    echo "</tr>";
                    echo "<tr>";
                }
                $i++; // Incrementa el contador

                // Crea una celda en la tabla y muestra la imagen como un enlace
                echo "<td>";
                echo "<a href='fotos/$archivo'><img src='fotos/$archivo' alt='imagen' width='100'></a>";
                echo "</td>";
            }
        }
        echo "</tr>"; // Cierra la última fila de la tabla
        echo "</table>"; // Cierra la tabla HTML
        closedir($gestor); // Cierra el directorio
    }
?>
```
