# Troubleshooting

## ❌ Error: Access denied for user 'root'

### Solution:
- Use correct password
- Try login:
sudo mysql

OR reset password

---

## ❌ Error: Undefined variable $conn

### Solution:
- Check dbcon.php is included
- Verify path:
require_once 'dbcon.php';

---

## ❌ Error: mysqli connection failed

### Solution:
- Check MySQL service:
sudo systemctl status mysql

- Restart:
sudo systemctl restart mysql

---

## ❌ Apache not working

### Solution:
sudo systemctl restart apache2

---

## ❌ Page not found (404)

### Solution:
- Check project path:
/var/www/html/grocery

---

## ❌ Permission denied

### Solution:
sudo chown -R www-data:www-data /var/www/html/grocery
sudo chmod -R 755 /var/www/html/grocery