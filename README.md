# 🍬 Slodycze.pl - Web Application Project
This project is a web application designed to manage an online store specializing in sweets. The platform allows users to browse 
a wide variety of confectionery products, add items to their cart, and complete purchases. 
<br>For store owners, it provides an intuitive admin panel to manage inventory, process orders, and update product details.

## 📚 About This Project
This project was completed as the final assignment for the *Web Application Programming* course during my engineering studies.

## 🧰 Development Tools
- JavaScript
- PHP
- HTML
- CSS
- [XAMPP](https://www.apachefriends.org/pl/index.html)
- [Laravel](https://laravel.com)
- [Bootstrap](https://getbootstrap.com)
- [Composer](https://getcomposer.org)
- [Visual Studio Code](https://code.visualstudio.com)

## 🚀 Installation Guide
Make sure you have installed required programs:
- XAMPP
- PHP 8.2.0
- Composer
- 7-Zip
- Visual Studio Code

### ▶️ First-time Setup
1. **Download** the project as a `.zip` file and extract it to folder of your choice.
2. **Launch** the **XAMPP Control Panel** and start the **Apache** and **MySQL** modules.
3. Run the `start.bat` file located in the project folder. 
> This script will automatically create the .env file, install required dependencies, run migrations and seeders, generate the app key, and start the local server.
4. Once the script finishes, open your web browser and navigate to:
<br> http://localhost:8000

>⚠️ Important:
Do not close the terminal window that appears after running `start.bat`. It is running the development server that serves the application. Closing it will stop the server.

### 🔁 Running the Application Later
When you want to run the application again (after the initial setup):
1. **Launch** the **XAMPP Control Panel** and start the **Apache** and **MySQL** modules.
2. Open the project folder in **Visual Studio Code**.
3. Open a **new terminal** (via the Terminal → New Terminal menu)
3. Run the following command to start the server:
<br> **`php artisan serve`**
4. When server starts, open your web browser and navigate to:
<br> http://localhost:8000

>⚠️ Important:
Do not close the terminal window running the server. It needs to remain open while using the application. If you need to use the terminal for other commands, open a new **terminal tab** by clicking the ➕ icon in top-right corner of terminal in VS Code.


## 🖥️ User Interface Overview

### 🔸 Main View

[image]

The main view displays recommended products, a sliding banner, and some random items from the shop at the bottom of the screen. 
<br>From this view the user can:
- Navigate to **Candies**, **Chocolates** or **Jellies** via the **"Nasze słodycze"** button in the top bar 
- Log in via the **"Zaloguj"** button in the top-right corner
- Open the product detail view by clicking a product card
- Search for products using the search input field

### 🔸 Candies View

[image]

The user can browse all **candy** products available in the shop.
<br>From this view, the user can:
- Open a product detail view via the **"Sprawdź!"** button
- Sort products by price using the buttons located at the top of the screen

### 🔸 Chocolates View

[image]

The user can browse all **chocolate** products available in the shop.
<br>From this view, the user can:
- Open a product detail view via the **"Sprawdź!"** button
- Sort products by price using the buttons located at the top of the screen

### 🔸 Jellies View

[image]

The user can browse all **jelly** products available in the shop.
<br>From this view, the user can:
- Open a product detail view via the **"Sprawdź!"** button
- Sort products by price using the buttons located at the top of the screen

### 🔸 Product Detail View (User)

[image]

This page shows detailed information about a specific product.
If the user is logged in, they can order the product by choose a quantity and add the item to the cart via the **"Dodaj do koszyka"** button.

### 🔸 Search Results View

[image]

After entering a keyword in the search field, the user is shown a list of matching products. Each result can be opened via the **"Sprawdź"** button on the product card.

### 🔸 Login View

[image]

A simple login form where users can sign into their accounts.

### 🔸 User Profile View

[image]

If the user is logged in, they can access their profile via the top bar (**User’s Name → Profil**). In this view, the user can view and edit their account details.

### 🔸 Shopping Cart View

[image]

Accessible via the **"Twój koszyk"** button when logged in.
<br>The user can:
- View all added products and their details
- Remove items from the cart

## 🗄️ Database Structure

The application uses 8 main tables:

- **users** – Stores user account informations.
- **roles** – Defines different user roles.
- **sweets** – Contains data about available products.
- **orders** – Represents customer orders.
- **transactions** – Records completed payments or payment attempts.
- **order_transactions** – Stores individual items within an order, acting as a pivot table between orders and sweets.
- **personal_access_tokens** – Manages API tokens for authenticated access, used by Laravel's token-based authentication system.
- **migrations** – Keeps track of which Laravel migrations have been executed. Used internally by Laravel.

Below is a simplified ER diagram of the database structure.

[image]


## 🛠️ CRUD Operations

### 🔸 Add Product View (Admin)

[image]

Accessible via the **"Dodaj produkt"** button. The admin can add a new product by filling out a simple form.

### 🔸 Product Detail View (Admin)

[image]

In the product detail view, the admin can:
- Delete a product via **"USUŃ"** button
- Refill product stock using the **Ilość** input
- Update product price using the **Zaktualizuj cene** field

### 🔸 User List View (Admin)

[image]

Accessible via the **"Użytkownicy"** button.
<br>The admin can:
- View a list of users
- Edit user data
- Delete user accounts

### 🔸 Edit User View (Admin)

[image]

A simple form where the admin can update selected user’s data.

### 🔸 Create User View (Admin)

[image]

Via the **"Dodaj użytkownika"** button, the admin can create new users by completing a short form.

## 📸 Notes
Product images, names, and descriptions were generated using AI.
<br>([](link))
