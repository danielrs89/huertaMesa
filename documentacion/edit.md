# 24/07/2024
git:
- instalacion [git](https://git-scm.com/download/win)  
- configurar [por primera vez](https://git-scm.com/book/es/v2/Inicio---Sobre-el-Control-de-Versiones-Configurando-Git-por-primera-vez)
- asociar gitlab vsc & github

docker:
guia [Docker & PHP](https://www.youtube.com/watch?v=-XnfBItOBHE)
- instalacion [docker](https://docs.docker.com/desktop/install/windows-install/)
- crear `Dockerfile` y crear la imagen 
    ```sh
        docker build -t huertamesa .
    ```
- lanzar la imagen, utilizamos Bowling que actualiza los cambios dentro del contenedor    
    ```sh
        docker run -p 9090:80 -d -v $PWD/src:/var/www/html huertamesa
    ```

#25/07/2024

Añadido a git `.gitignore` dentro se pude poner todo lo relacionado al proyecto que no quiera subir a git

Estoy mirando las plantillas de web, 
- 94, 73, 72, 33 interesante
- 92 calendario
- 86, 49 tarjetas - ampliar y corazon
- 69=61,  diseño -rosa +degradadoLayuJunDanie
- 62 diseño colores
- 48 diseño forma
- 47 diseño forma colores
- 38 colores diseño moderno
- 35,21,9,1 utilidades(tablas)
- 32 colores +junDanie

falta revisar en detalle lo que quiere de estas plantillas

# 30/07/2024

elección de plantilla( lo que quiero de cada una en concreto)

- interesante
94, 
73, 
72, 
33 
-  calendario
92
-  tarjetas - ampliar y corazon
86, 
49
- ,  diseño -rosa +degradadoLayuJunDanie
69=61
-  diseño colores
62
-  diseño forma
48
-  diseño forma colores
47
-  colores diseño moderno
38
-  utilidades(tablas)
35,21,9,1
-  colores +junDanie
32

estado mirando la 38 y es un **rollo tener que modificar todo, pero empezar de cero es más complejo con el tema responsive** 

# 31/07/2024 

me quedo con la 38 la estoy comentando para saber como funciona, mi idea es separar todo los componentes "menu, tarjetas"

# 4/8/24

nueva rama `añadir-sql` para crear un docker compose donde se ejecute el proceso de php + sql

```sh
docker-compose up -d

$env:MYSQL_ROOT_PASSWORD = "root"
$env:MYSQL_DATABASE = "huertamesa"
$env:MYSQL_USER = "admin"
$env:MYSQL_PASSWORD = "admin"
docker-compose up -d

docker-compose ps
```
de esta forma muchos probremas, instalado heidi reinicio y compruebo si establece conexion

falta:  
- probar php en .html SI FUNCIONA
- docker como servicio no con escritorio

instalado mysql8, gestor bd heidi, lanzado script para importar datos"`/otros`", tras intntar establecer conexón me faltan las extensiones necesarias las añado en `Dockerfile` y como mi php ewsta en un contenedor y la bd esta fuera debemos apuntar a la IP del host Docker  
```sh
$host = 'host.docker.internal'; // Dirección del servidor de la base de datos
```

```sh
    docker build -t huertamesa .

    docker run -p 9090:80 -d -v $PWD/src:/var/www/html huertamesa
```

doy por cerrada esta rama ya funciona la conexion docker & bd

siguiente comprobar que hay conexion y la animacion inicial

