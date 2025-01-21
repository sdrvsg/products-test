Запуск проекта

1. `mkdir products-test`
2. `cd products-test`
3. `git clone https://github.com/sdrvsg/products-test .`
4. `composer install`
5. `cp .env.example .env`
6. `php artisan key:generate`
7. Заполнить .env своими данными
8. `npm install`
9. `npm run build`
10. `php artisan migrate --seed`
11. `php artisan optimize`

Далее при локальном запуске

1. `php artisan serve`
2. `php artisan queue:work`
3. `php artisan schedule:work`
4. Перейти по URL сайта

