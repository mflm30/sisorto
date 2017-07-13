## SISORTO

### Alguns pré requisitos para rodar o laravel

* Composer Instalado
* PHP 5.6.4
* Variável de ambiente do PHP


### Comandos necessários após o clone

* Copiar o conteúdo do .env.example e colorcar num novo arquivo .env
* Configurar a conexão de banco do arquivo .env

> composer dump-autoload<br>
> composer install<br>
> php artisan key:generate<br>
> php artisan config:clear<br>
> php artisan migrate<br>
> php artisan db:seed --class=UsersTableSeeder<br>
> php artisan cache:clear<br>
> php artisan serve
