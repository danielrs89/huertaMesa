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