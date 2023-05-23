<?php
    use Slim\Http\Request;
    use Slim\Http\Response;
    use App\Models\Produto; // Pegando a classe produto pelo namescape
// Rotas para produtos
/*
ORM -> Object Relational Mapper (Mapeador de objeto relacional)
Illuminate -> é o motor da base de dados do Laravel sem o Laravel

Eloquent ORM
*/
$app->group('/api/v1', function(){
    $this->get('/produtos/lista', function(Request $request,Response $response){
        // Fazendo um select no banco direto com método ::get com o extends de model de eloquent
        $produtos = Produto::get();
        return $response->withJson( $produtos );
    });
});
