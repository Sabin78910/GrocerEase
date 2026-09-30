<div align="center">

# 🛒 GrocerEase

**A full-stack, multi-vendor online grocery marketplace**

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Oracle](https://img.shields.io/badge/Oracle%20Database-F80000?style=for-the-badge&logo=oracle&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PayPal](https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white)

</div>

---

## Overview

**GrocerEase** is a multi-vendor e-commerce platform that connects local traders with customers. Customers can browse products from multiple independent sellers, manage a cart and wishlist, reserve a collection slot, and pay securely online. Traders manage their own product catalogue, discounts, and incoming orders from a dedicated dashboard.

The application is built with **PHP** on an **Oracle Database** backend and features a fully responsive, component-based front end with theme customisation.

---

## Key Features

### 👤 Customer Experience
- **Account management:** registration, login and logout, profile updates and account settings
- **Email verification:** one-time passcode (OTP) delivered by email via PHPMailer
- **Password recovery:** secure forgot-password and reset flow
- **Product discovery:** product listing, detailed product pages, filtering and search (including a dedicated mobile search)
- **Top deals and discounts:** highlighted offers with automatic discount calculation
- **Wishlist:** save products for later
- **Shopping cart:** persistent cart synchronised between session and database
- **Collection slots:** choose a collection date and time window at checkout
- **Online payments:** integrated **PayPal** checkout (sandbox) with success and failure handling
- **Order history and invoices:** view past orders and generate invoices
- **Product reviews:** rate and review purchased products

### 🏪 Trader Portal
- Dedicated **trader registration** and onboarding request workflow
- **Product management:** add, view and update products with images
- **Discount management:** create and manage product-level discounts
- **Order fulfilment:** view and manage orders awaiting delivery

### 🎨 Interface
- Fully **responsive** layout with desktop navigation and a mobile bottom navigation bar
- **Theme switching** for a personalised look
- Reusable, component-based page structure (navbars, footers, page sections)
- Custom error and success pages

---

## Tech Stack

| Layer | Technology |
|---|---|
| **Front end** | HTML5, CSS3, JavaScript |
| **Back end** | PHP (session-based authentication) |
| **Database** | Oracle Database XE (OCI8, bind variables, transactions) |
| **Payments** | PayPal Standard Checkout (sandbox) |
| **Email** | PHPMailer (SMTP) for OTP and notifications |
| **Server** | Apache (XAMPP) |

---

## Architecture

```
┌──────────────┐      ┌─────────────────────┐      ┌──────────────────┐
│   Browser    │ ───▶ │   PHP application   │ ───▶ │  Oracle Database │
│ HTML/CSS/JS  │ ◀─── │ (Apache / XAMPP)    │ ◀─── │   (OCI8 driver)  │
└──────────────┘      └─────────┬───────────┘      └──────────────────┘
                                │
                   ┌────────────┴────────────┐
                   ▼                         ▼
            ┌─────────────┐          ┌──────────────┐
            │  PayPal API │          │ SMTP / Email │
            │  (Checkout) │          │ (PHPMailer)  │
            └─────────────┘          └──────────────┘
```

**Core data entities:** Users, Traders, Products, Discounts, Cart, Wishlist, Orders (order header and order line items), Collection Slots, Reviews.

---

## Project Structure

```
GrocerEase/
├── assets/              # Stylesheets, icons and static assets
├── components/          # Reusable UI components (navbars, footers, page sections)
├── images/              # UI imagery
├── ProductImage/        # Uploaded product images
├── js/                  # Client-side scripts
├── PHPMailer/           # Email library (OTP and notifications)
├── GrocerEaseProject/   # Supporting project files
├── index.php            # Home page
├── product.php          # Product details
├── filter.php           # Product filtering and search
├── cart.php             # Shopping cart
├── wishlist.php         # Wishlist
├── checkout.php         # Collection slot selection and PayPal checkout
├── orders.php           # Customer order history
├── invoice.php          # Invoice generation
├── products-review.php  # Product reviews
├── registeruser.php     # Customer registration
├── registerTrader.php   # Trader registration
├── otp.php              # Email OTP verification
├── myProducts.php       # Trader product management
├── productDiscount.php  # Trader discount management
├── order-to-deliver.php # Trader order fulfilment
└── connection.php       # Database connection
```

---

## Screenshots

> Add screenshots to a `screenshots/` folder and they will appear here.

| Home | Product | Cart |
|---|---|---|
| ![Home](screenshots/home.png) | ![Product](screenshots/product.png) | ![Cart](screenshots/cart.png) |

| Checkout | Trader Dashboard | Mobile |
|---|---|---|
| ![Checkout](screenshots/checkout.png) | ![Trader](screenshots/trader.png) | ![Mobile](screenshots/mobile.png) |

---

## Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (Apache and PHP)
- [Oracle Database XE](https://www.oracle.com/database/technologies/xe-downloads.html)
- PHP **OCI8** extension enabled (`extension=oci8` in `php.ini`)
- A PayPal Developer sandbox account
- An SMTP account for sending emails

### Installation

1. **Clone the repository** into your web root:
   ```bash
   cd C:/xampp/htdocs        # or /Applications/XAMPP/htdocs on macOS
   git clone https://github.com/Sabin78910/GrocerEase.git
   ```
2. **Set up the database:** create an Oracle schema and run the database scripts to create the tables and seed data.
3. **Configure the connection:** update the credentials in `connection.php` to match your Oracle schema.
4. **Configure email:** add your SMTP credentials in the PHPMailer configuration.
5. **Configure PayPal:** set your sandbox business account and your local return URLs in `checkout.php`.
6. **Run:** start Apache and open `http://localhost/GrocerEase`.

---

## Roadmap

- [ ] Move credentials to environment variables
- [ ] Convert all queries to parameterised statements
- [ ] Password hashing with `password_hash()`
- [ ] Admin analytics dashboard
- [ ] REST API for a companion mobile app

---

## Author

**Sabin Khanal**
Full-Stack & Android Developer

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/sabin-khanal-950163326/)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Sabin78910)
