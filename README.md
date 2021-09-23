# Apex Pizza House
It is a web application written in Laravel for a pizza store. It has multiple features.
# Features:
- User Authentication
- User Email Verification
- User can order, cancel order, manage cart
- Admin Panel
- Admin can manage orders i.e dispatch orders when they are ready
# Admin Login Details:
- Email ID: admin@apexpizza.com
- Password: 1234
# User Login Details:
- Email ID: user@gmail.com
- Password: 1234
# How to Run on LocalHost
- Save this repo in xampp/htdocs.
- correctly connect database and gmail server (for mailing service) in env file
- run in terminal
```terminal
composer update
php artisan migrate:fresh --seed
php artisan serve
```
### User Login
