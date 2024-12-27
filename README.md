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

- Replace the fields with the parameters

````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taskapp
DB_USERNAME=root
DB_PASSWORD=
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
npm install && npm run dev
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
