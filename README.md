<p align="center">
</p>

## Code Challenge

below is the list of steps to perform in order to use the project

- clone the project
- Run composer install
- Run cp .env.example .env
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan serve
- Go to link localhost:8000
- or run php artisan test to ensure project is running without problem

## project summary

- In this project I have tried to build an order product placing system with jwt based auth
- The Order model is related to Product model with OrderProduct Model
- I Have tried to use SOLID principles in project some includes using Action classes in controllers for Single responsibility principle
- Dependency Injection is used in controllers for ensuring there is not tight coupling problem
- I Have used Data classes instead of Request classes for better frontend support including typescript autogenerated files
- Another benefit of Data classes is being able to use class attributes instead of accessing array values
- I have tried to write test for all controller methods to ensure high code coverage
- Main design patterns that are used in project are Factory classes,Facades, ...
