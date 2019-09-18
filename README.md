# Concessionária API

 Sistema para cadastro de carros de uma concessionária.
 
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Instalando o Laravel 
    composer create-project --prefer-dist laravel/laravel concessionaria-api
## barryvdh/laravel-cors
barryvdh/laravel-cors é um Pacote para fazer com que o laravel possa ser acessado por outras aplicações como o Angular e etc 
### Instalação    
    composer create-project --prefer-dist laravel/laravel concessionaria-api
### Configuração
   Os padrões são definidos em config / cors.php. Copie este arquivo para seu próprio diretório de configuração para modificar os valores.
   Você pode publicar a configuração usando este comando:
        
        docker exec -it concessionaria-api php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"
   
   É necessario adicionar o Cors\ServiceProvider(Barryvdh\Cors\ServiceProvider::class,) 
   dentro do config/app.php
    
     'providers' => [
        ...
         /*
          * Application Service Providers...
          */
          ...
          Barryvdh\Cors\ServiceProvider::class,
     ],
   Para permitir o CORS para todas as suas rotas, adicione o middleware HandleCors na propriedade $middleware da classe app / Http / Kernel.php:
    
     protected $middleware = [
       // ...
       \Barryvdh\Cors\HandleCors::class,
     ];
   Se você deseja permitir o CORS em um grupo ou rota de middleware específico, adicione o middleware HandleCors ao seu grupo:
   
    protected $middlewareGroups = [
       'web' => [
          // ...
       ],
       'api' => [
           // ...
           \Barryvdh\Cors\HandleCors::class,
       ],
   ];
## Rodando a Aplicação
### Para Desenvolvedores (olhar o Log)
    docker-compose up --build
### Para Produção (Rodar em background)    
    docker-compose up -d --build
### Para Construir a imagem    
    docker-compose build
### Para rodar a aplicação sem realizar a construção (build)    
    docker-compose up
### Para rodar a aplicação e realizar as migrações (migrations) e seeds do banco de dados    
    docker-compose -f local-db.yml up     
### Para rodar os testes unitarios (olhar o log)    
    docker-compose -f tdd-local.yml up    
### Para gerar arquivo de teste    
    docker exec -it concessionaria-api php artisan make:test UserTest --unit
### Para Rodar a migração e a seed juntos    
    docker exec -it concessionaria-api php artisan migrate:fresh --seed
### Para usar o tinker dentro do container    
    docker exec -it concessionaria-api php artisan tinker
### Para rodar o composer install dentro do container    
    docker exec -it concessionaria-api composer install --ignore-platform-reqs --verbose
    
    
    
