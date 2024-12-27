## Installation

````
git clone https://github.com/lessandsass/taskApp.git
````

````
cd taskApp
````

````
composer install
````

````
cp .env.example .env
````

````
php artisan key:generate
````

````
mysql -u root -p
````

````
create database taskapp;
````

````
php artisan migrate --seed
````

````
npm install && npm run prod
````

````
php artisan serve
````

- If you try to seed the database for second time it produce an for a duplicate entry of the user
- Otherwise you can manually register a user using register form, and then you can use tinker app to create todo for multiple user.
- Before you start the tinker shell please make sure the user's id to create todos, for that you can use your database client app such as Tableplus, HeidiSQL or the phpmyadmin

````
php artisan tinker
````

````
App\Models\Todo::factory()->times(5)->create(['user_id' => 2]);
````
