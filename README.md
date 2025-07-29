# MVC PHP Website with PostgreSQL

A complete Model-View-Controller (MVC) web application built with PHP and PostgreSQL database.

## Features

- **MVC Architecture**: Clean separation of concerns with Models, Views, and Controllers
- **PostgreSQL Database**: Robust database management with proper schema
- **Responsive Design**: Modern UI with Tailwind CSS and Font Awesome icons
- **RESTful API**: JSON API endpoints for integration
- **User Management**: Create, read, update, and delete users
- **Product Management**: Manage products with categories and pricing
- **Clean Routing**: Simple URL routing system

## Project Structure

```
├── index.php              # Main entry point and router
├── config/
│   └── database.php       # Database connection configuration
├── models/
│   ├── User.php          # User model with CRUD operations
│   └── Product.php       # Product model with CRUD operations
├── controllers/
│   ├── HomeController.php     # Home page controller
│   ├── UserController.php     # User management controller
│   └── ProductController.php  # Product management controller
├── views/
│   ├── layout.php        # Main layout template
│   ├── home.php          # Homepage view
│   ├── 404.php           # Error page
│   ├── users/
│   │   ├── index.php     # Users listing page
│   │   └── create.php    # User creation form
│   └── products/
│       ├── index.php     # Products listing page
│       └── create.php    # Product creation form
├── database/
│   └── schema.sql        # Database schema and sample data
└── README.md
```

## Setup Instructions

### 1. Database Setup

1. Install PostgreSQL on your system
2. Create a new database:
   ```sql
   CREATE DATABASE mvc_website;
   ```
3. Run the schema file:
   ```bash
   psql -U postgres -d mvc_website -f database/schema.sql
   ```

### 2. Configuration

1. Update database credentials in `config/database.php`:
   ```php
   private $host = 'localhost';
   private $db_name = 'mvc_website';
   private $username = 'your_username';
   private $password = 'your_password';
   private $port = '5432';
   ```

### 3. Web Server Setup

#### Using PHP Built-in Server (Development)
```bash
php -S localhost:8000
```

#### Using Apache
1. Place files in your web root directory
2. Ensure mod_rewrite is enabled
3. Configure virtual host if needed

#### Using Nginx
Configure your server block to route all requests to `index.php`

## API Endpoints

### Users
- `GET /api/users` - Get all users
- `POST /api/users` - Create a new user

### Products
- `GET /api/products` - Get all products  
- `POST /api/products` - Create a new product

### Example API Usage

```javascript
// Get all users
fetch('/api/users')
  .then(response => response.json())
  .then(data => console.log(data));

// Create a new user
fetch('/api/users', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    name: 'John Doe',
    email: 'john@example.com'
  })
});
```

## Routes

- `/` - Homepage
- `/users` - Users management
- `/users/create` - Create new user
- `/products` - Products management
- `/products/create` - Create new product
- `/api/users` - Users API endpoint
- `/api/products` - Products API endpoint

## Technologies Used

- **Backend**: PHP 7.4+
- **Database**: PostgreSQL 12+
- **Frontend**: HTML5, Tailwind CSS, Font Awesome
- **Architecture**: MVC Pattern
- **API**: RESTful JSON API

## Security Features

- Input sanitization and validation
- SQL injection prevention with prepared statements
- XSS protection with htmlspecialchars()
- Proper error handling

## Development

To extend this application:

1. **Add new models**: Create new PHP classes in the `models/` directory
2. **Add new controllers**: Create new controllers in the `controllers/` directory
3. **Add new views**: Create new view files in the `views/` directory
4. **Add new routes**: Update the routing logic in `index.php`
5. **Database changes**: Update `database/schema.sql` with new tables or modifications

## License

This project is open source and available under the MIT License.