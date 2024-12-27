<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About The App

A Simple Task Tracking App is a simple yet powerful tool designed to help users manage their tasks and stay organized. It allows users to create, update, and delete tasks, set priorities. With a clean and intuitive interface, it ensures that users can quickly add tasks and track their progress.  Built with technologies like Laravel Livewire for interactivity, TailwindCSS for design, and MySQL for data storage, a Simple Task Tracking App is an excellent project for developers to enhance their skills while creating something highly practical and widely useful.

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
