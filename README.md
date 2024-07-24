# Online Grocery Store

## Overview

This repository contains the implementation of an Online Grocery Store web application. The primary goal of this project was to develop a simple and attractive web application to promote no-contact purchasing, especially beneficial in post-COVID-19 scenarios. The application allows users to browse, add to cart, and purchase groceries online. Admin functionalities include managing stock and reviewing transactions.

## Description

The Online Grocery Store project is designed to facilitate easy and convenient online grocery shopping. The application includes user login, product browsing, shopping cart, order confirmation, and admin functionalities for managing stock and transactions.

## Features

### User Functionalities
- **User Login**: Users can log in using their unique customer ID and password.
- **Create Account**: New users can create an account by providing necessary details such as address, password, security question, and payment information.
- **Home Page**: Displays daily offers, bestselling products, and categories. Includes a search bar for quick product searches.
- **Product Browsing**: Users can browse products by category and add them to the shopping cart.
- **Shopping Cart**: Displays items added to the cart with total price and allows users to proceed to order.
- **Order Confirmation**: Users can review and confirm their orders. Generates an invoice upon confirmation.
- **Order Status**: Displays the status of current and past orders.
- **Logout**: Users can log out to end their session.

### Admin Functionalities
- **Admin Login**: Admins log in using their unique manager ID.
- **Manage Stock**: Admins can update and add new stock.
- **Review Transactions**: Admins can view daily transactions and manage inventory.

### Implementation Details

- **Front-End Technologies**: HTML5, CSS3, JavaScript
- **Back-End Technologies**: PHP, MySQL
- **Server**: WAMP server for hosting the database and the web application

### Front-End Requirement Specification
- Modern Browser capable of executing JavaScript like Google Chrome, Microsoft Edge, Mozilla Firefox, Safari, etc.
- Stable and preferably fast Internet connection.
- Latest version of WAMP server must be installed.

### Back-End Requirement Specification
- A server to host the database and the API capable of interacting with the front-end and the back-end.
- SQL database, preferably an engine like MySQL.
- The infrastructure must scale elastically as the number of users/invocations increase/decrease.

## Usage

To use the Online Grocery Store application, set up the WAMP server and host the application files. Ensure the database is correctly set up with the required tables and initial data. Open the application in a modern web browser to start using it.
=> Copy the file php->wtproj from the folder php
=> Save the above wtproj file in WWW folder of WAMP application folder.
=> Import the gocery.sql code from the sql folder in phpMyAdmin.
=> Run on browser "localhost/wtproj/login.php"

## Learnings

- **Web Development**: Gained experience in developing a complete web application using HTML, CSS, JavaScript, PHP, and MySQL.
- **Database Management**: Learned to design and manage a database for storing product and user information.
- **User Authentication**: Implemented secure user authentication and session management.
- **E-commerce Functionality**: Developed functionalities typical of e-commerce platforms, including product browsing, shopping cart, and order management.

## Conclusion

This project provided valuable experience in developing a comprehensive web application. The Online Grocery Store demonstrates the ability to create a user-friendly and functional e-commerce platform using modern web technologies.
