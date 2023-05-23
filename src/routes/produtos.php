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

    // Lista Produtos
    $this->get('/produtos/lista', function(Request $request,Response $response){
        // Fazendo um select no banco direto com método ::get com o extends de model de eloquent
        $produtos = Produto::get();
        return $response->withJson( $produtos );
    });

    // Adiciona um produto
    $this->post('/produtos/adiciona', function($request, $response){
        $dados =  $request->getParsedBody();

        $produto = Produto::create( $dados );
        return $response->withJson( $produto );

    });

    // Recupera um produto por id:
    $this->get('/produtos/lista/{id}', function(Request $request,Response $response, $args){
        $produtos = Produto::findOrFail($args['id']);
        return $response->withJson( $produtos );
    });

    // Atualiza um produto por um determinado ID
    $this->put('/produtos/atualiza/{id}', function($request, $response, $args){
        $dados =  $request->getParsedBody();
        $produto = Produto::findOrFail($args['id']);
        $produto->update( $dados );
        return $response->withJson( $produto );
    });

    // Remove um produto por um determinado ID
    $this->get('/produtos/remove/{id}', function($request, $response, $args){
        $produto = Produto::findOrFail($args['id']);
        $produto->delete();
        return $response->withJson( $produto );
    });

});
