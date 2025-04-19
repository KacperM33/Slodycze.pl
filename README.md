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

![image](https://github.com/user-attachments/assets/c627902a-f7eb-4870-8102-8ef14ddc6412)

The main view displays recommended products, a sliding banner, and some random items from the shop at the bottom of the screen. 
<br>From this view the user can:
- Navigate to **Candies**, **Chocolates** or **Jellies** via the **"Nasze słodycze"** button in the top bar 
- Log in via the **"Zaloguj"** button in the top-right corner
- Open the product detail view by clicking a product card
- Search for products using the search input field

### 🔸 Candies View

![image](https://github.com/user-attachments/assets/18daa0a7-fe1f-4e67-8b66-edd402263c70)

The user can browse all **candy** products available in the shop.
<br>From this view, the user can:
- Open a product detail view via the **"Sprawdź!"** button
- Sort products by price using the buttons located at the top of the screen

### 🔸 Chocolates View

![image](https://github.com/user-attachments/assets/53c3606b-2ee6-41e2-bfc3-8a98d9fc5e89)

The user can browse all **chocolate** products available in the shop.
<br>From this view, the user can:
- Open a product detail view via the **"Sprawdź!"** button
- Sort products by price using the buttons located at the top of the screen

### 🔸 Jellies View

![image](https://github.com/user-attachments/assets/33ca021b-733a-4732-b751-2f6f43d57a12)

The user can browse all **jelly** products available in the shop.
<br>From this view, the user can:
- Open a product detail view via the **"Sprawdź!"** button
- Sort products by price using the buttons located at the top of the screen

### 🔸 Product Detail View (User)

![image](https://github.com/user-attachments/assets/4980c134-c0dc-4050-8348-bfa6b2b341ad)

This page shows detailed information about a specific product.
If the user is logged in, they can order the product by choose a quantity and add the item to the cart via the **"Dodaj do koszyka"** button.

### 🔸 Search Results View

![image](https://github.com/user-attachments/assets/0e3bab28-03dd-4a2d-b0e5-59eedb44080a)

After entering a keyword in the search field, the user is shown a list of matching products. Each result can be opened via the **"Sprawdź"** button on the product card.

### 🔸 Login View

![image](https://github.com/user-attachments/assets/840f42a7-8f03-41a1-b550-3f122e0971b2)

A simple login form where users can sign into their accounts.

### 🔸 User Profile View

![image](https://github.com/user-attachments/assets/1ff8eadf-1448-45be-a20f-940112a394f7)

If the user is logged in, they can access their profile via the top bar (**User’s Name → Profil**). In this view, the user can view and edit their account details.

### 🔸 Shopping Cart View

![image](https://github.com/user-attachments/assets/2a3ef11e-57d2-4038-9c1d-55ec2975c1d2)

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

![image](https://github.com/user-attachments/assets/a95b1c09-bd5a-41a3-941c-8dfeb1eff04e)



## 🛠️ CRUD Operations

### 🔸 Add Product View (Admin)

![image](https://github.com/user-attachments/assets/15a964ef-3b7b-45d9-905f-920a50c709fd)

Accessible via the **"Dodaj produkt"** button. The admin can add a new product by filling out a simple form.

### 🔸 Product Detail View (Admin)

![image](https://github.com/user-attachments/assets/02374b16-739b-484e-97e6-5682659a51c4)

In the product detail view, the admin can:
- Delete a product via **"USUŃ"** button
- Refill product stock using the **Ilość** input
- Update product price using the **Zaktualizuj cene** field

### 🔸 User List View (Admin)

![image](https://github.com/user-attachments/assets/3e2bc337-c124-49f7-9c52-a834d08d17b1)

Accessible via the **"Użytkownicy"** button.
<br>The admin can:
- View a list of users
- Edit user data
- Delete user accounts

### 🔸 Edit User View (Admin)

![image](https://github.com/user-attachments/assets/c8e1e8eb-7504-4da5-b2ed-ee68df5e5113)

A simple form where the admin can update selected user’s data.

### 🔸 Create User View (Admin)

![image](https://github.com/user-attachments/assets/cc1affca-7e2f-4f7c-ada5-303b8f28ff7f)

Via the **"Dodaj użytkownika"** button, the admin can create new users by completing a short form.

## 📸 Notes
Product images, names, and descriptions were generated using AI.
<br>([Bing (currently Copilot)](https://copilot.microsoft.com))
