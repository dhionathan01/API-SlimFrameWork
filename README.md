# API-SlimFrameWork
### Criando API com SlimFramework
OBS: Sempre usar o commando : ```php composer.phar``` invés do ```composer``` para composer criado localmente
#### Instalação composer
* Obtendo o setup:
```
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```
* Instalando o composer:
```
$ php composer-setup.php
```
* Removendo arquivo setup composer:
```
php -r "unlink('composer-setup.php');"
```
#### Instalando o SlimFramework com skeleto
```
$ php composer.phar create-project slim/slim-skeleton --prefer-dist
```
#### Instalando versão 3.1
```
$ php composer.phar create-project slim/slim-skeleton:^3.5 slim3
```
#### Instalando illuminate para uso e configuração do banco de dados:
```
$ php composer.phar require illuminate/database
```
#### Rodando arquivo db.php via terminal
* OBS: Tem que executar no diretório que antecede o public:
```
$ php db.php
```
#### Atualizando o composer com o diretório App para poder utilizar o namespace " App\ "
```
$ php composer.phar update
```

#### Adicionando lib para geração do token
```
$ php composer.phar  require firebase/php-jwt
```
