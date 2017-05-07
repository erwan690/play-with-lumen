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

use Illuminate\Http\Response;

$app->get('/', function () use ($app) {
    return $app->version();
});

// $app->get('/hello', function () {
//     return 'Hello World';
// });

// $app->get('/hai', function () {
//     $data = ['success' => true, 'data' => ['title' => 'hai']];
//     return json_encode($data);
// });

$app->get('/notes', function () {
    $data = [
        'totalData' => 1,
        'data' => [
            ['id' => 1, 'title' => 'Ini judul', 'content' => 'Ini contentnnya']
        ]
    ];

    return (new Response(json_encode($data), 200))->header('Content-Type', 'application/json');
});
