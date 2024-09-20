# Employee Information system

Create an Employee Information System using the Laravel web framework.

#How to run the project (laravel version: 8.75)

1. Clone the repository
2. Run `composer install`
3. Run `cp .env.example .env`
4. php artisan key:generate
5. create a database and add the database credentials to the .env file
6. Run `php artisan migrate`
7. Run `php artisan db:seed --class=EmployeeSeeder`
8. Run `php artisan serve`
9. Visit localhost:8000 in your browser
