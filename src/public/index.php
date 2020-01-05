<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 2019/12/28
 * Time: 9:50
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/hello/{name}', function(Request $request, Response $response, array $args){
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

try {
    $app->run();
} catch (Throwable $e){

}
