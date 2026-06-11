# Setup Guide

## 📌 System Requirements
- Linux OS (Ubuntu recommended)
- Root or sudo access

## ⚙️ Install LAMP Stack

### Update system
sudo apt update

### Install Apache
sudo apt install apache2 -y

### Install MySQL
sudo apt install mysql-server -y

### Install PHP
sudo apt install php php-mysql -y

## ▶️ Start Services
sudo systemctl start apache2
sudo systemctl start mysql

## 🔍 Check Status
sudo systemctl status apache2
sudo systemctl status mysql

## 🌐 Test Apache
Open browser:
http://localhost

If Apache page loads → Setup successful ✅