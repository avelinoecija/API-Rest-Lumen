<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
// function resource($uri, $controller)
// {
//$verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE'];
// global $router;
// $router->get($uri, $controller.'@index');
// $router->post($uri, $controller.'@store');
// $router->get($uri.'/{id}', $controller.'@show');
// $router->put($uri.'/{id}', $controller.'@update');
// $router->patch($uri.'/{id}', $controller.'@update');
// $router->delete($uri.'/{id}', $controller.'@destroy');
// }

 $router->get('/', function () use ($router) {
     return $router->app->version();
 });


// $router->get('/api/posts', [
// 'uses' => 'PostController@index',
// 'as' => 'list_posts'
// ]);

$router->get('api/alumnos', 'PostController@index');
$router->get('api/usuarios', 'UsuarioController@index');
$router->get('api/propuestas', 'PropuestaController@index');
$router->get('api/votos', 'VotacionController@store');

