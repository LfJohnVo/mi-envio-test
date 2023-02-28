# Requisitos
    
     1. PHP 8.0
     2. Composer
     4. Mysql 5.7
     5. Apache

# Archivos

Una vez descargado se deben correr los siguientes comandos en este orden:

    1. composer install
    2. cp .env.example .env
    3. php artisan migrate --seed
    4. php artisan key:generate
    5. php artisan serve
    6. Ingresar a: localhost:8000
