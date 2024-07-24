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