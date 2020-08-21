<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca de este proyecto

Proyecto desarrollado para la materia de laboratorio de software, Universidad Tecnologica de Pereira Semestre I 2020, dictada por el profesor Cesar Jaramillo.

Este proyecto es un aplicativo web que tiene por objetivo proveer un servicio informativo y seguimiento de los egresados de la universidad. Hemos implementado el framework de Laravel. 

## Prerequisitos

Para poder poner en marcha este proyecto es necesario previamente contar con los siguientes elementos : 

- Php7.x 
- Composer ( [Sitio Web Oficial](https://getcomposer.org/))
- Motor de base de datos: **MariaDB** o **MySQL**
- Editor, recomendacion VSCode
- terminal o shell 

Para el desarrollo, se utilizo sistema operativo Debian version 10, Base de datos MySQL. todo el proyecto 
se desarrollo gracias a la [documentacion oficial](https://laravel.com/docs). 

## Puesta en Marcha
1. Clonamos el repo : 
    ```sh
    $ git clone https://github.com/EgresadosUTP/EgresadosUTP-egresadosExperimental-
    ```
2. Ingresamos a la carpeta y realizamos la instalacion de las dependencias con composer (con esto, se instala también Laravel/UI para autenticación)
    ```sh
    $ cd egresadosUTP 
    egresadosUTP$ composer install
    ```

    2.1 Instalar y correr las depenencias necesarias de Node
    ```sh
    $ cd egresadosUTP 
    egresadosUTP$ npm install && npm run dev
    ```
    
3. Una vez tenemos las dependencias de Laravel instaladas, es necesario configurar nuestro archivo de entorno .env 
    ```sh
    egresadosUTP$ cp .env.example .env
    ```

4. Creamos nuestra base de datos y corremos la migraciones y cambios. Ejecutamos también con --seed los Seeders de las tablas para poblar nuestra base de datos con datos de prueba.
    ```sh
    egresadosUTP$ php artisan migrate --seed
    ```
    Obtendras una salida como la siguiente : 
    ```sh
    Dropped all tables successfully. (esta línea se obtiene en caso de ejecutar php artisan migrate:fresh --seed)
    Migrating: 2014_10_12_000000_create_users_table
    Migrated:  2014_10_12_000000_create_users_table (0.33 seconds)
    Migrating: 2014_10_12_100000_create_password_resets_table
    Migrated:  2014_10_12_100000_create_password_resets_table (0.24 seconds)
    Migrating: 2019_08_19_000000_create_failed_jobs_table
    Migrated:  2019_08_19_000000_create_failed_jobs_table (0.12 seconds)
    Migrating: 2020_05_06_232923_create_news_table
    Migrated:  2020_05_06_232923_create_news_table (0.17 seconds)
    Migrating: 2020_05_06_233154_create_role_user_table
    Migrated:  2020_05_06_233154_create_role_user_table (0.1 seconds)
    Migrating: 2020_05_07_002510_create_cities_table
    Migrated:  2020_05_07_002510_create_cities_table (0.09 seconds)
    Migrating: 2020_05_07_003438_create_egresadosutpdbs_table
    Migrated:  2020_05_07_003438_create_egresadosutpdbs_table (0.29 seconds)
    Migrating: 2020_05_07_005426_create_roles_table
    Migrated:  2020_05_07_005426_create_roles_table (0.1 seconds)
    Seeding: RolesTableSeeder
    Seeded:  RolesTableSeeder (0.57 seconds)
    Seeding: UsersTableSeeder
    Seeded:  UsersTableSeeder (9.83 seconds)
    Seeding: EgresadosutpdbTableSeeder
    Seeded:  EgresadosutpdbTableSeeder (0.85 seconds)

    ```
5. Ejecutamos y ponemos a correr nuestro servidor localmente
    ```sh
    egresadosUTP$ php artisa serve 
    Laravel development server started: http://127.0.0.1:8000
    [Thu Apr 30 23:33:17 2020] PHP 7.4.5 Development Server (http://127.0.0.1:8000) started
    ```
## Rutas


| Domain | Method    | URI                               | Name                      | Action                                                                 | Middleware              |
|--------|-----------|-----------------------------------|---------------------------|------------------------------------------------------------------------|-------------------------|
|        | GET|HEAD  | /                                 |                           | Closure                                                                | web                     |
|        | GET|HEAD  | admin/egresados                   | admin.egresados.index     | App\Http\Controllers\Admin\EgresadosController@index                   | web,can:manageEgresados |
|        | GET|HEAD  | admin/egresados/{egresado}        | admin.egresados.show      | App\Http\Controllers\Admin\EgresadosController@show                    | web,can:manageEgresados |
|        | DELETE    | admin/egresados/{egresado}        | admin.egresados.destroy   | App\Http\Controllers\Admin\EgresadosController@destroy                 | web,can:manageEgresados |
|        | GET|HEAD  | admin/news                        | admin.news.index          | App\Http\Controllers\Admin\NewsController@index                        | web,can:manageEgresados |
|        | POST      | admin/news                        | admin.news.store          | App\Http\Controllers\Admin\NewsController@store                        | web,can:manageEgresados |
|        | GET|HEAD  | admin/news/create                 | admin.news.create         | App\Http\Controllers\Admin\NewsController@create                       | web,can:manageEgresados |
|        | GET|HEAD  | admin/news/{news}                 | admin.news.show           | App\Http\Controllers\Admin\NewsController@show                         | web,can:manageEgresados |
|        | PUT|PATCH | admin/news/{news}                 | admin.news.update         | App\Http\Controllers\Admin\NewsController@update                       | web,can:manageEgresados |
|        | DELETE    | admin/news/{news}                 | admin.news.destroy        | App\Http\Controllers\Admin\NewsController@destroy                      | web,can:manageEgresados |
|        | GET|HEAD  | admin/news/{news}/edit            | admin.news.edit           | App\Http\Controllers\Admin\NewsController@edit                         | web,can:manageEgresados |
|        | PUT|PATCH | admin/profile/{profile}           | admin.profile.update      | App\Http\Controllers\Admin\ProfileController@update                    | web,can:manageEgresados |
|        | GET|HEAD  | admin/profile/{profile}           | admin.profile.show        | App\Http\Controllers\Admin\ProfileController@show                      | web,can:manageEgresados |
|        | GET|HEAD  | admin/profile/{profile}/edit      | admin.profile.edit        | App\Http\Controllers\Admin\ProfileController@edit                      | web,can:manageEgresados |
|        | GET|HEAD  | api/user                          |                           | Closure                                                                | api,auth:api            |
|        | GET|HEAD  | contacto                          | contacto                  | App\Http\Controllers\ContactController@contacto                        | web                     |
|        | GET|HEAD  | egresado/friends                  | egresado.friends.index    | App\Http\Controllers\Egresado\FriendsController@index                  | web,can:egresado        |
|        | POST      | egresado/friends                  | egresado.friends.store    | App\Http\Controllers\Egresado\FriendsController@store                  | web,can:egresado        |
|        | GET|HEAD  | egresado/friends/{friend}         | egresado.friends.show     | App\Http\Controllers\Egresado\FriendsController@show                   | web,can:egresado        |
|        | DELETE    | egresado/friends/{friend}         | egresado.friends.destroy  | App\Http\Controllers\Egresado\FriendsController@destroy                | web,can:egresado        |
|        | PUT|PATCH | egresado/interest/{interest}      | egresado.interest.update  | App\Http\Controllers\Egresado\InterestController@update                | web,can:egresado        |
|        | GET|HEAD  | egresado/interest/{interest}/edit | egresado.interest.edit    | App\Http\Controllers\Egresado\InterestController@edit                  | web,can:egresado        |
|        | GET|HEAD  | egresado/news/{news}              | egresado.news.show        | App\Http\Controllers\Egresado\NewsController@show                      | web,can:egresado        |
|        | PUT|PATCH | egresado/profile/{profile}        | egresado.profile.update   | App\Http\Controllers\Egresado\ProfileController@update                 | web,can:egresado        |
|        | GET|HEAD  | egresado/profile/{profile}        | egresado.profile.show     | App\Http\Controllers\Egresado\ProfileController@show                   | web,can:egresado        |
|        | GET|HEAD  | egresado/profile/{profile}/edit   | egresado.profile.edit     | App\Http\Controllers\Egresado\ProfileController@edit                   | web,can:egresado        |
|        | GET|HEAD  | home                              | home                      | App\Http\Controllers\HomeController@index                              | web,auth                |
|        | GET|HEAD  | login                             | login                     | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest               |
|        | POST      | login                             |                           | App\Http\Controllers\Auth\LoginController@login                        | web,guest               |
|        | POST      | logout                            | logout                    | App\Http\Controllers\Auth\LoginController@logout                       | web                     |
|        | GET|HEAD  | password/confirm                  | password.confirm          | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web,auth                |
|        | POST      | password/confirm                  |                           | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web,auth                |
|        | POST      | password/email                    | password.email            | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                     |
|        | POST      | password/reset                    | password.update           | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                     |
|        | GET|HEAD  | password/reset                    | password.request          | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                     |
|        | GET|HEAD  | password/reset/{token}            | password.reset            | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                     |
|        | POST      | register                          |                           | App\Http\Controllers\Auth\RegisterController@register                  | web,guest               |
|        | GET|HEAD  | register                          | register                  | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest               |
|        | GET|HEAD  | superadmin/admins                 | superadmin.admins.index   | App\Http\Controllers\SuperAdmin\AdminController@index                  | web,can:manageAdmins    |
|        | POST      | superadmin/admins                 | superadmin.admins.store   | App\Http\Controllers\SuperAdmin\AdminController@store                  | web,can:manageAdmins    |
|        | GET|HEAD  | superadmin/admins/create          | superadmin.admins.create  | App\Http\Controllers\SuperAdmin\AdminController@create                 | web,can:manageAdmins    |
|        | DELETE    | superadmin/admins/{admin}         | superadmin.admins.destroy | App\Http\Controllers\SuperAdmin\AdminController@destroy                | web,can:manageAdmins    |
|        | GET|HEAD  | superadmin/admins/{admin}         | superadmin.admins.show    | App\Http\Controllers\SuperAdmin\AdminController@show                   | web,can:manageAdmins    |
|        | PUT|PATCH | superadmin/admins/{admin}         | superadmin.admins.update  | App\Http\Controllers\SuperAdmin\AdminController@update                 | web,can:manageAdmins    |
|        | GET|HEAD  | superadmin/admins/{admin}/edit    | superadmin.admins.edit    | App\Http\Controllers\SuperAdmin\AdminController@edit                   | web,can:manageAdmins    |
|        | GET|HEAD  | superadmin/profile                | superadmin.profile.index  | App\Http\Controllers\SuperAdmin\ProfileController@index                | web,can:manageAdmins    |
|        | PUT|PATCH | superadmin/profile/{profile}      | superadmin.profile.update | App\Http\Controllers\SuperAdmin\ProfileController@update               | web,can:manageAdmins    |
|        | GET|HEAD  | superadmin/profile/{profile}/edit | superadmin.profile.edit   | App\Http\Controllers\SuperAdmin\ProfileController@edit                 | web,can:manageAdmins    |

## Usuarios de prueba
- email : egresado@g.co,
  password : 123

- email : admin@g.co,
  password : 123

- email : superadmin@g.co,
  password : 123


## Miembros de Equipo 

- Juan Camilo Chavarro Acosta
- Diego Calvera Hernandez
- Melissa Escobar Gutierrez
- Eduar Jaramillo 

## Contribuciones

Para realizar aportes o contribuciones se implementa el [modelo](https://tighten.co/blog/adding-commits-to-a-pull-request/) de pull request.Todos los aportes son bienvenidos de personas 
ajenas a los miembros de equipo


## Licencia

Proyecto de software licenciado bajo licencia [MIT](https://opensource.org/licenses/MIT).
