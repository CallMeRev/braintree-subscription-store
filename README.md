# Build a Monthly Subscription App with Laravel Cashier

This is the code repo for the [Scotch School](https://school.scotch.io) course: [Build a Monthly Subscription App with Laravel Cashier](https://school.scotch.io/build-a-monthly-subscription-app-with-laravel-cashier). 

## Requirements 

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [A Braintree Account](use sandbox for testing)

## Installation

- Clone the repo: `git clone git@github.com:scotch-io/laravel-cashier-course`
- Go into the repo: `cd laravel-cashier-course`
- Install dependencies: `composer install`
- Copy `.env.example` to `.env`: `cp .env.example .env`
- Create a key: `php artisan key:generate`
- Fill in 'BRAINTREE_ENV=sandbox' 'BRAINTREE_MERCHANT_ID' 'BRAINTREE_PUBLIC_KEY' 'BRAINTREE_PRIVATE_KEY' in `.env`
- Start the app: `php artisan serve`
- Visit the app: <http://localhost:8000>


## Braintree 
Since this is laravel 5.2 i used "laravel/cashier-braintree": "~1.0".
for more follow the official docs : https://laravel.com/docs/5.2/billing#braintree-configuration

