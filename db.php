<?php
// Fazendo ajustes para que a applicação só rode por meio de linha de comando "CLI":
if (PHP_SAPI != 'cli') {
    exit('Rodar via CLI');
}

require __DIR__ . '/vendor/autoload.php';
// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/src/dependencies.php';
$db = $container->get('db');
$schema =  $db->schema();
$tabela = 'produtos';

$schema->dropIfExists($tabela);
$schema->create($tabela, function ($table) {
    $table->increments('id');// criando uma coluna auto increment chamada id
    $table->string('titulo', 100); // criando uma coluna string com tamanho 100
    $table->text('descricao'); // criando uma coluna text
    $table->decimal('preco', 11, 2); // criando uma coluna decimal
    $table->string('fabricante', 60); // criando uma coluna string de tamanho 60
    $table->date('dt_criacao'); // criando uma coluna tipo date
});

// Preenche a tabela:
$db->table($tabela)->insert([
    'titulo' => 'Samsung Galaxy S20 FE- 128gb 6GB RAM Snapdragon Edition',
    'descricao' => 'Android 11 Samsung One UI 3.0  Tela 6.5  Octa-Core 2.2ghz 5G Câmera 12MP',
    'preco' => 1899.00,
    'fabricante' => 'Samsung',
    'dt_criacao' => '2021-02-01'
]);
$db->table($tabela)->insert([
    'titulo' => 'iPhone X - Cinza Espacial 64gb',
    'descricao' => 'Tela 5.8  IOS 12 4G  Wi-Fi Câmera 12MP - Apple',
    'preco' => 4999.00,
    'fabricante' => 'Apple',
    'dt_criacao' => '2020-01-10'
]);