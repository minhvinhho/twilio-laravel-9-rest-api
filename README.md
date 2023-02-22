# project setup
01. `composer install || composer update`
02. `cp .env.example .env`
03. `php artisan key:generate`
04. `php artisan migrate`
05. `php artisan db:seed`
06. `php artisan storage:link`
07. `php artisan serve`

# build laravel mix
`npm ci && npm run dev`

# use node
`npm install`
`npm run dev`

# using laravel telescope
`php artisan telescope:install`
`php artisan telescope:publish`

# run services
`service supervisor start`

# clear up
`php artisan optimize:clear`
01. `php artisan config:cache`
02. `php artisan cache:clear`
03. `php artisan route:clear`
04. `php artisan view:clear`
05. `composer dump-autoload`

# check routes
`php artisan optimize`

# using redis
or windows 64 go here `https://github.com/MicrosoftArchive/redis/releases` and
=>Download `Redis-x64-3.2.100.msi` file
=>Run it and install it
=>Then open the Redis folder (it will the installed folder) then run `redis-server.exe` file.
=>Now your Redis server is activated

# ERROR SSL
`set NODE_OPTIONS=--openssl-legacy-provider`
# IDE Helper
`composer require --dev barryvdh/laravel-ide-helper`
`php artisan ide-helper:generate`
`php artisan ide-helper:models`
`php artisan ide-helper:meta`
`php artisan ide-helper:generate`
`php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config`