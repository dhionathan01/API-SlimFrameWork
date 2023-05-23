<?php
    use Slim\Http\Request;
    use Slim\Http\Response;

$app->group('/api/v1', function(){
    $this->get('/produtos', function(Request $request,Response $response){
        return $response->withJson(['nome'=> 'Samsung S20 FE']);
    });
});
