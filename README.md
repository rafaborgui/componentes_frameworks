# Componentes e Frameworks
demonstração utilização de anotations e RPC em Laravel

## Requisitos
- Php 7
- Composer
- Laravel 5.1
- LaravelCollective/annotations
- johnstevenson/jsonrpc

## Instalação
 - Instalar Php 7 [Download Php](https://windows.php.net/download#php-7.4)
 - Instalar Composer [Download Composer ](https://getcomposer.org/download/)
 - Instalar Laravel 5.1
  ``` composer create-project laravel/laravel projetoNome "5.1.*" ```
  - Instalar LaravelCollective/annotations
    
    adicionar no composer.json depois rodar: composer update
  ``` 
  "require": {
    "laravelcollective/annotations": "6.0.\*"
}
```
- Instalar johnstevenson/jsonrpc
  
  adicionar no composer.json depois rodar: composer update
``` 
{
    "minimum-stability": "dev",
    "require": {
        "jsonrpc/jsonrpc": "1.0.*"
    }
}
```
