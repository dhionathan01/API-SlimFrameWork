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