# Getting started

Clone the repository

    git clone https://github.com/mvtdev1050/PHP-Test-Assignment.git

Switch to the repo folder

    cd PHP-Test-Assignment

Install all the dependencies using composer

    composer install

Install all the dependencies using npm

    npm install


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Start the local development server

    ./vendor/bin/sail up -d
    ./vendor/bin/sail up npm run build
    
You can now access the server at http://0.0.0.0

OR
    
    npm run build
    php artisan serve
    

You can now access the server at http://127.0.0.1:8000/
