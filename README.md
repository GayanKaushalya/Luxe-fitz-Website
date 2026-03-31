# 👗 Luxe Fitz Clothing Store

A **modern full-stack e-commerce web application** built using **Laravel** for managing an online clothing store.

The platform allows users to **browse clothing products, view detailed information, and explore categories**, while administrators can **manage products, categories, and overall store content** through a centralized dashboard.

> ⚠️ Note: This system includes all core store functionalities **except the shopping cart and checkout system**.

---

## 🛠 Tech Stack

<p align="left">
  <img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/Laravel-Framework-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/Blade-Templating-F55247?style=for-the-badge"/>
  <img src="https://img.shields.io/badge/Vite-BuildTool-646CFF?style=for-the-badge&logo=vite&logoColor=white"/>
  <img src="https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white"/>
</p>

---

## 📌 Features

### 🛍 User Features

* Browse clothing products
* View product details (price, description, images)
* Explore product categories
* Responsive and user-friendly interface

### 🛠 Admin Features

* Add, update, and delete products
* Manage product categories
* Upload and manage product images
* Control product visibility
* Manage overall store content



---

## 🚀 Installation Guide

### ⚙️ Prerequisites

* PHP 8+
* Composer
* Node.js & npm
* MySQL Server

---

### 1️⃣ Clone the Repository

git clone https://github.com/GayanKaushalya/Luxe-fitz-Website.git
cd Luxe-fitz-Website

---

### 2️⃣ Install Dependencies

composer install
npm install

---

### 3️⃣ Configure Environment

cp .env.example .env
php artisan key:generate

---

### Configure Database (.env)

DB_DATABASE=luxe_fitz_db
DB_USERNAME=your_username
DB_PASSWORD=your_password

---

### 4️⃣ Database Setup

CREATE DATABASE luxe_fitz_db;

php artisan migrate

(Optional)
php artisan db:seed

---

## ▶ Run the Application

php artisan serve
npm run dev

Open: http://localhost:8000

---

## 🧪 Testing

php artisan test

---

## 🔮 Future Improvements

* Shopping Cart System
* Online Payment Integration
* User Authentication
* Order Management
* Product Reviews & Ratings

---

## 📜 License

This project is developed for **educational purposes**.

---

## 👨‍💻 Author

**Gayan Kaushalya**
Software Engineering Student
Full-Stack Developer

---

⭐ If you found this project useful, consider giving it a **star on GitHub**.
