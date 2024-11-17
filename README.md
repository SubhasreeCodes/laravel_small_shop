# laravel_small_shop

This is a simple e-commerce application built with Laravel. The project focuses on three main components: **Product**, **Cart**, and **Order**.

### Key Features:
- **Product Management**: Display products, categories, and product details.
- **Shopping Cart**: Allow users to add, update, or remove products in the cart.
- **Order Processing**: Manage customer orders, including checkout, payment, and order confirmation.

The application is designed to provide an intuitive and smooth shopping experience, from browsing products to completing orders.

## Install Dependencies

Go to the termial

### 1. Creating Laravel Project
```
composer create-project laravel/laravel:^10.0 laravel_small_shop
```

### 2. Navigate to the Project Folder
```
cd laravel_small_shop
```

### 3. Start Laravel's local development server
```
php artisan serve
```

### 4. Run your application's database migrations
```
php artisan migrate
```

### 5. Configure your .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 6. Generate application key
```
php artisan key:generate
```
