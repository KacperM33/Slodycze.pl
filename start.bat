php -r "copy('.env.example', '.env');"

call composer install

call php artisan migrate

call php artisan db:seed --class=DatabaseSeeder

call php artisan key:generate

call php artisan storage:link

start php artisan serve

code .

exit