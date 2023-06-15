<?php 
    use Slim\Http\Request;
    use Slim\Http\Response;
    use App\Models\Produto;

    // Rotas para geração de token
    $app->post('/api/token', function($request, $response){
        $dados = $request->getParseBody();
        $email = $dados['email'] ?? null;
        $senha = $dados['email'] ?? null;
        $usuario =  Usuario::where('email', $email)->first();
        if(!is_null($usuario) AND (md5($senha) === $usuario->senha)){
            //gerar token
            
        }
    });
?>