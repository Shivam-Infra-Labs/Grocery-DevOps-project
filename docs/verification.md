# Verification

## ✅ Step 1: Open Application
Go to:
http://localhost/grocery

## ✅ Step 2: Check UI
- Homepage loads
- Products visible

## ✅ Step 3: Test Feedback Form
- Enter Name
- Enter Mobile
- Enter Message
- Click Submit

## ✅ Step 4: Verify Database Entry

Login MySQL:
mysql -u root -p

Run:
USE grocery;
SELECT * FROM feedback;

## 🎯 Expected Result
- New record inserted in feedback table

## 📸 Proof
- Screenshot of form submission
- Screenshot of database entry