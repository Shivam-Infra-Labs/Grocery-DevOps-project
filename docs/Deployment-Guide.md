# Deployment Guide

## 📁 Step 1: Move Project Files

Copy project to Apache directory:

sudo cp -r grocery /var/www/html/

## 🔐 Step 2: Set Permissions

sudo chown -R www-data:www-data /var/www/html/grocery
sudo chmod -R 755 /var/www/html/grocery

## 🗄️ Step 3: Create Database

Login MySQL:
mysql -u root -p

Create database:
CREATE DATABASE grocery;

## 📥 Step 4: Import Database

mysql -u root -p grocery < grocery.sql

OR inside MySQL:
USE grocery;
SOURCE /var/www/html/grocery/grocery.sql;

## 🔧 Step 5: Configure Database Connection

Edit dbcon.php:

$conn = new mysqli("localhost", "root", "your_password", "grocery");

## ▶️ Step 6: Restart Apache

sudo systemctl restart apache2

## 🌐 Step 7: Access Application

http://localhost/grocery