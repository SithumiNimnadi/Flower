-- MVC Website Database Schema
-- PostgreSQL Database Setup

-- Create database (run this separately)
-- CREATE DATABASE mvc_website;

-- Connect to the database and run the following:

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Products table
CREATE TABLE IF NOT EXISTS products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO users (name, email) VALUES 
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com'),
('Mike Johnson', 'mike@example.com')
ON CONFLICT (email) DO NOTHING;

INSERT INTO products (name, description, price, category) VALUES 
('Laptop Computer', 'High-performance laptop for work and gaming', 999.99, 'Electronics'),
('Coffee Mug', 'Ceramic coffee mug with company logo', 12.99, 'Home & Garden'),
('Programming Book', 'Learn PHP and PostgreSQL development', 49.99, 'Books'),
('Wireless Mouse', 'Ergonomic wireless mouse with USB receiver', 29.99, 'Electronics'),
('T-Shirt', 'Comfortable cotton t-shirt', 19.99, 'Clothing')
ON CONFLICT DO NOTHING;

-- Create indexes for better performance
CREATE INDEX IF NOT EXISTS idx_users_email ON users(email);
CREATE INDEX IF NOT EXISTS idx_products_category ON products(category);
CREATE INDEX IF NOT EXISTS idx_products_price ON products(price);