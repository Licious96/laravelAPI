<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## INSTRUCTIONS ON HOW TO RUN THIS PROJECT ON YOUR LOCAL MACHINE



- Clone the project from this github repository to your local machine, or alternatively download the zip folder and unzip it on your local machine
- Open the project folder with your desired IDE, preferably VS Code
- Change the name of the .env.example file to .env
- Open the .env file and add laravelapi on the DB_DATABASE
- Also add database connection of your choice next to DB_CONNECTION, in my case I used 'mysql'
- Now create a database in the db manager of your choosen database, in my case I used XAMPP to create a database in PHPMyAdmin and named it laravelapi
- Open the terminal or the command line on your IDE and run 'composer install' (If you do not have composer installed on your machine, please download it from (https://getcomposer.org/) and install it on your computer)
- Again run 'php artisan migrate' on your terminal to create the required tables in the database
- Now run 'php artisan serve' to start your project.
- Open any app to test your API, in my case I used Postman to test the API's.
- Copy and paste this url 'http://127.0.0.1:8000/api/aquaria/fish/1' and choose post on the method in order to add a fish in aquarium one.
- Choose the get method to retrieve all fishes in aquarium one.
- Choose the put method to update a fish, enter the fish id to update in the url.
- Copy and paste this url 'http://127.0.0.1:8000/api/aquaria/convert-size-to/gallons' and choose the post method in order to change the size of the aquarium from litres to gallons
- Find all the routes of the API's in the routes folder inside the api.php file
