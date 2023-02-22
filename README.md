# Santillana/Oowlish Code Challenge

## Required Remainder
Code Challenge for PHP. Includes Unit tests.

The project is created using Laravel 9.19.

### Relevant files
- The route created: ```routes/web.php```
- Controller: ```app/Http/Controllers/RequiredRemainder.php```
- Service and service interface:
    - ```app/Services/RequiredRemainderService.php```
    - ```app/Services/Interfaces/RequiredRemainderServiceInterface.php```
- Service provider: ```app/Providers/RequiredRemainderServiceServiceProvider.php```
- View: ```resources/views/required_remainder.blade.php```
- Unit test: ```tests/Unit/RequiredRemainderServiceTest.php```

### Running the project
Land to project's root folder and execute:
```
php artisan serve
```

Open a browser and navigate to ```http://127.0.0.1:8000```

The endpoint to check the code challenge results is in the route ```http://127.0.0.1:8000/required-remainder```

### Unit tests
Class ```RequiredRemainderService``` was tested using PHPUnit.

To execute unit tests, run the following command:
```
php artisan test
```
