# Effective-mobile-Task

This is a test task for a backend web developer using Laravel. This project implements a simple REST API for managing tasks (TO-do list).


### Requirements
- **Laravel 12.32.5**
- **PHP 8.4+**
- **Composer 2.8.10**
- **MySQL 8+**
- **WSL 2 (Ubuntu 22.04.5 LTS) or native Ubuntu 22.04.5 LTS** – tested under WSL2 Ubuntu environment
- **Git**


#### 1. Clone the repository
```bash
git clone https://github.com/Ado148/Effective-mobile-Task.git
cd Effective-mobile-Task
```

#### 2. Install PHP dependencies
If you do not have composer installed, install it, if you do, skip this step.
```bash 
composer install
```

#### 3. Create .env file and Update database settings
```bash
cp .env.example .env
```
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eff_mobile
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Then use this command to generate the application key if there is none in the .env file:
```bash
php artisan key:generate
```

#### 4. Run migrations and seed the database
```bash
php artisan migrate:fresh --seed
```

Then you need to clear the configuration caches:
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

#### 5. start the local development server
```bash
php artisan serve --host=0.0.0.0 --port=8000
```

#### 6. Access the API
For accessing the API was used Postman. You can import the provided Postman collection `Effective Mobile-Task.postman_collection.json` into your Postman application. You can find it in the `Postman` directory in the root of the project.


