# Multi_Vendor_Portal

## Project Overview
Multi-Vendor E-commerce Platform is a scalable marketplace where multiple vendors can sign up, list their products, manage inventory, and process orders. It includes features like vendor and admin dashboards, product management, cart, wishlist, order management, payment gateway integration, and a review/rating system.

## MVC Structure

### Models
- **User**: Represents users (vendors, admins, customers) and their roles.
- **Role**: Manages role-based access control.
- **Product**: Handles product details, categories, and inventory.
- **Order**: Manages customer orders and their statuses.
- **Review**: Stores product reviews and ratings.

### Controllers
- **VendorController**: Manages vendor-specific actions like dashboard and product management.
- **AdminController**: Handles admin-specific actions like managing all products and vendors.
- **ProductController**: Handles CRUD operations for products.
- **CartController**: Manages cart and wishlist functionalities.
- **OrderController**: Processes orders and order history.
- **PaymentController**: Integrates payment gateways (e.g., Razorpay/Stripe).
- **ReviewController**: Handles product reviews and ratings.

### Views (UI)
- **Blade Templates**: Located in `resources/views/`, these templates render the UI for:
  - Vendor Dashboard: `resources/views/vendor/dashboard.blade.php`
  - Admin Dashboard: `resources/views/admin/dashboard.blade.php`
  - Product Listings: `resources/views/products/index.blade.php`
  - Cart and Wishlist: `resources/views/cart/index.blade.php`
  - Order Management: `resources/views/orders/index.blade.php`
  - Payment Page: `resources/views/payment/index.blade.php`

## Additional Features
- **Middleware**: Role-based access control using custom middleware.
- **Database**: MySQL database with migrations for users, roles, products, orders, and reviews.
- **Payment Integration**: Secure payment processing with Razorpay/Stripe.

## How to Run
1. Clone the repository.
2. Install dependencies: `composer install`.
3. Set up `.env` file and configure database and payment gateway credentials.
4. Run migrations: `php artisan migrate`.
5. Start the server: `php artisan serve`.
6. Access the application at `http://localhost:8000`.