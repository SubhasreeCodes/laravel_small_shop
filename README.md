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

###  7. Create product Model and Migrations
```
php artisan make:model Category -m
```

### 8. Create Cart Model and Migrations
```
php artisan make:model Cart -m
```

### 9. Create Order Model and Migrations
```
php artisan make:model Order -m
```
### 10. Run your application's database migrations (fresh)
This will reset the database by dropping all tables and re-running all migrations from scratch to ensure a clean setup.
```
php artisan migrate:fresh
```

### 11. Seed the database
```
php artisan db:seed
```

### 12. Install the Filament Panel
```
composer require filament/filament:"^3.2" -W
```
```
php artisan filament:install --panels
```

### 13. Create a user
You can create a new user account with the following command
```
php artisan make:filament-user
```

### 14. Automatically generate Filament resources, forms, and tables for Product, Cart, and Order.
```
php artisan make:filament-resource Product --generate
php artisan make:filament-resource Cart --generate
php artisan make:filament-resource Order --generate
```
### 15. [dom pdf library](https://github.com/dompdf/dompdf) 
```
composer require dompdf/dompdf
```

#### dom pdf
```
composer require barryvdh/laravel-dompdf
```

#### Generate Invoice Controller
```
php artisan make:controller InvoiceController
```


# Invoice Template for Order System

In this project, we model the relationship between **Order**, **Cart**, and **Product** entities.

### Relationships:
- An **Order** has many **Cart** items.

- Each **Cart** item belongs to a **Product** and has a `quantity` attribute.

- A **Product** has a `name` and `price`.

### Structure:
1. **Order** has many **Cart** items.

2. **Cart** belongs to a **Product** and includes a `quantity`.

3. **Product** has a `name` and `price`.

This is how we structure our models to efficiently generate invoices.

### Output

![Forget_password page]("C:\Users\subha\Pictures\Screenshots\Screenshot 2024-11-18 192123.png")



erase after some time:  https://www.youtube.com/shorts/Nq4KhDGbuF8   (Whatsapp)
                        https://www.youtube.com/shorts/prSlrLxBU_o

Check out my [GitHub profile](https://github.com/username) for more projects.
