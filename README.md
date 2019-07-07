# Point of Sale

## Requirements
* PHP >= 7.1.3
* Composer
* MySQL

## Installation
1. Clone the repository
```bash
git clone https://github.com/Rocamadour7/POS.git
```
2. Navigate to the project folder
```bash
cd POS
```
3. Rename the `.env.example` file to `.env` and fill the database information, __create a database if needed__
```bash
mv .env.example .env
```
4. Install the packages used in the project
```bash
composer install
#or
php composer.phar install
```
5. Generate a random key
```bash
php artisan key:generate
```
6. Create and populate the tables
```bash
php artisan migrate --seed
```
7. Run the project using a local development server
```bash
php artisan serve
```