<?php

use Horizom\Routing\Router;

Router::post('home', '/', 'main@index');
Router::get('hello', '/hello/{name}', 'main@hello');
Router::route('api', '/api', 'main@api')->allows(["POST", "GET"]);
