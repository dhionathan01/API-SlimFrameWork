<?php
    use Slim\Http\Request;
    use Slim\Http\Response;
// Rotas para produtos
/*
ORM -> Object Relational Mapper (Mapeador de objeto relacional)
Illuminate -> é o motor da base de dados do Laravel sem o Laravel

Eloquent ORM
*/
$app->group('/api/v1', function(){
    $this->get('/produtos/lista', function(Request $request,Response $response){
        return $response->withJson(['nome'=> 'Samsung S20 FE']);
    });
});
