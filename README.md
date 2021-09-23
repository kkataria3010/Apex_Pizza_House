# Apex Pizza House
It is a web application written in Laravel for a pizza store. It has multiple features.
# Features:
- User Authentication
- User Email Verification
- User can order, cancel order, manage cart
- Admin Panel
- Admin can manage orders i.e dispatch orders when they are ready
# Admin Login Details:
- Email ID: admin@apexpizza.in
- Password: admin
# How to Run on LocalHost
- Save this repo in xampp/htdocs.
- upload SQL file to PHPMyAdmin
- correctly connect database and gmail server (for mailing service) in env file
- run in terminal
```terminal
composer update
php artisan serve
```
# Demo Images
- Landing Page
![ezgif-1-93ab0eb32d02-min](https://user-images.githubusercontent.com/46279553/121857975-c3eb9100-cd13-11eb-8787-00d213a3bcbc.gif)

- User Orders and admin dispatches that order.
- User Orders and cancel before admin dispatches.
![ezgif-1-3d70d3c3f0ba-min](https://user-images.githubusercontent.com/46279553/121867885-0ade8400-cd1e-11eb-89bb-086530e2a160.gif)

-Emails for user verification, order delivered and order cancelled
![ezgif-1-117f341b1f8c-min](https://user-images.githubusercontent.com/46279553/121868104-395c5f00-cd1e-11eb-92c3-10277dff4b95.gif)
