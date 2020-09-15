# DH-movies

Proyecto correspondiente al desafio de Laravel

## Pasos para ejecutar el proyecto localmente 📋

1. Terner instalada la base de datos movies_db
2. Clonar el proyecto en la carpeta que sea de nuestro agrado con el comando "git clone https://github.com/nicobus/DH-Movies.git"
3. Dentro de la carpeta del proyecto a travez del comando "composer update" actualizaremos las dependencias necesarias
4. Con el comando "php artisan storage:link" vinculamos la carpeta storage a la carpeta publica.
5. Ejecutamos las migraciones con el comando "php artisan migrate"
6. Ejecutamos los seeders para cargar los roles de usuarios y un admin con el comando "php artisan db:seed"

## Caracteristicas

La pagina principal del proyecto se encuentra en la ruta "/home", desde la cual a travez del menu "titulos" se puede acceder a la lista de todas peliculas o tambien se las puede traer por diferentes generos. El header cuenta con un buscador de peliculas por titulo.
Se pueden crear nuevos usuarios a travez del menu "registrarse" los cuales no tendran ninguna funcion adicional a un usuario que no este logueado. En caso de querer acceder como administrador sera a travez de la cuenta cargada con el seeder cuyo email es "admin@dh-movies.com" y su password "12345678". Una vez que este logueado como administrador podra acceder al menu de admin y realizar alta, modificacion y eliminacion de las peliculas.

## Autor ✒️

* **Nicolás Bustamante** 

