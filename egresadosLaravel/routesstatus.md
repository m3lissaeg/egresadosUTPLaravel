+--------+-----------+-----------------------------------+---------------------------+------------------------------------------------------------------------+----------------------+
| Domain | Method    | URI                               | Name                      | Action                                                                 |Status                |
+--------+-----------+-----------------------------------+---------------------------+------------------------------------------------------------------------+----------------------+
|        | GET|HEAD  | /                                 |                           | Closure                                                                |        OK            |
|        | GET|HEAD  | admin/egresados                   | admin.egresados.index     | App\Http\Controllers\Admin\EgresadosController@index                   |                      |
|        | DELETE    | admin/egresados/{egresado}        | admin.egresados.destroy   | App\Http\Controllers\Admin\EgresadosController@destroy                 |                      |
|        | GET|HEAD  | admin/egresados/{egresado}        | admin.egresados.show      | App\Http\Controllers\Admin\EgresadosController@show                    |                      |
|        | POST      | admin/news                        | admin.news.store          | App\Http\Controllers\Admin\NewsController@store                        |                      |
|        | GET|HEAD  | admin/news                        | admin.news.index          | App\Http\Controllers\Admin\NewsController@index                        |                      |
|        | GET|HEAD  | admin/news/create                 | admin.news.create         | App\Http\Controllers\Admin\NewsController@create                       |                      |
|        | DELETE    | admin/news/{news}                 | admin.news.destroy        | App\Http\Controllers\Admin\NewsController@destroy                      |                      |
|        | PUT|PATCH | admin/news/{news}                 | admin.news.update         | App\Http\Controllers\Admin\NewsController@update                       |                      |
|        | GET|HEAD  | admin/news/{news}                 | admin.news.show           | App\Http\Controllers\Admin\NewsController@show                         |                      |
|        | GET|HEAD  | admin/news/{news}/edit            | admin.news.edit           | App\Http\Controllers\Admin\NewsController@edit                         |                      |
|        | PUT|PATCH | admin/profile/{profile}           | admin.profile.update      | App\Http\Controllers\Admin\ProfileController@update                    |                      |
|        | GET|HEAD  | admin/profile/{profile}           | admin.profile.show        | App\Http\Controllers\Admin\ProfileController@show                      |                      |
|        | GET|HEAD  | admin/profile/{profile}/edit      | admin.profile.edit        | App\Http\Controllers\Admin\ProfileController@edit                      |                      |
|        | GET|HEAD  | api/user                          |                           | Closure                                                                |                      |
|        | GET|HEAD  | home                              | home                      | App\Http\Controllers\HomeController@index                              |                      |
|        | GET|HEAD  | login                             | login                     | App\Http\Controllers\Auth\LoginController@showLoginForm                |                      |
|        | POST      | login                             |                           | App\Http\Controllers\Auth\LoginController@login                        |                      |
|        | POST      | logout                            | logout                    | App\Http\Controllers\Auth\LoginController@logout                       |                      |
|        | GET|HEAD  | password/confirm                  | password.confirm          | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    |                      |
|        | POST      | password/confirm                  |                           | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            |                      |
|        | POST      | password/email                    | password.email            | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  |                      |
|        | GET|HEAD  | password/reset                    | password.request          | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm |                      |
|        | POST      | password/reset                    | password.update           | App\Http\Controllers\Auth\ResetPasswordController@reset                |                      |
|        | GET|HEAD  | password/reset/{token}            | password.reset            | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        |                      |
|        | GET|HEAD  | register                          | register                  | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      |                      |
|        | POST      | register                          |                           | App\Http\Controllers\Auth\RegisterController@register                  |                      |
|        | GET|HEAD  | superadmin/admins                 | superadmin.admins.index   | App\Http\Controllers\SuperAdmin\AdminController@index                  |           OK         |
|        | POST      | superadmin/admins                 | superadmin.admins.store   | App\Http\Controllers\SuperAdmin\AdminController@store                  |                      |
|        | GET|HEAD  | superadmin/admins/create          | superadmin.admins.create  | App\Http\Controllers\SuperAdmin\AdminController@create                 |                      |
|        | DELETE    | superadmin/admins/{admin}         | superadmin.admins.destroy | App\Http\Controllers\SuperAdmin\AdminController@destroy                |                      |
|        | PUT|PATCH | superadmin/admins/{admin}         | superadmin.admins.update  | App\Http\Controllers\SuperAdmin\AdminController@update                 |                      |
|        | GET|HEAD  | superadmin/admins/{admin}         | superadmin.admins.show    | App\Http\Controllers\SuperAdmin\AdminController@show                   |                      |
|        | GET|HEAD  | superadmin/admins/{admin}/edit    | superadmin.admins.edit    | App\Http\Controllers\SuperAdmin\AdminController@edit                   |                      |
|        | GET|HEAD  | superadmin/profile                | superadmin.profile.index  | App\Http\Controllers\SuperAdmin\ProfileController@index                |                      |
|        | PUT|PATCH | superadmin/profile/{profile}      | superadmin.profile.update | App\Http\Controllers\SuperAdmin\ProfileController@update               |                      |
|        | GET|HEAD  | superadmin/profile/{profile}/edit | superadmin.profile.edit   | App\Http\Controllers\SuperAdmin\ProfileController@edit                 |                      |
+--------+-----------+-----------------------------------+---------------------------+------------------------------------------------------------------------+----------------------+