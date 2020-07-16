
## About Twitter Clone Laravel Project from LARACAST
I later found out the original source code at >> https://github.com/laracasts/Tweety  

To run my partially built laravel project

- cd into the "twiggytweet" directory
- run in the terminal >>
````
composer install
````
- change .env.example to .env
- change the database name, user and password ,run >>
````
php artisan key:generate
````
- to create the tables, run >> 
````
php artisan migrate
````
- boot the server run >>
````
php artisan serve
````
- tinker it is a repl (read-eval-print loop). A repl translates to read-eval-print-loop , and it is an interactive language shell, run >>
````
php artisan tinker
````
- run the UserFactory.php to seed the db with 2 users run >>
````
factory('App\User',2)->create();
````
- run the TweetFactory.php to seed the db with 3 tweets, run >> 
````
factory('App\Tweet',3)->create(['user_id'=>1]);
````

That's it!


