# Apotek

Pharmacy Website is a Laravel-based web application that showcases various medicines on the homepage, managed through an admin panel.

## Features

- **Medicine Management**: Add, edit, and remove medicines from the admin panel.
- **Responsive Design**: Optimized for desktop and mobile devices.
- **Image Uploads**: Upload and display medicine images on the homepage.
- **User Authentication**: Secure login and admin access.
- **Search and Filtering**: Easily find medicines by name or category.
- **SEO Friendly**: Optimized for search engines to attract visitors.

## Installation

### Requirements
Ensure your system meets the following requirements:
- PHP >= 8.0
- Composer
- MySQL or PostgreSQL
- Node.js & NPM (for frontend assets)

### Setup Guide
1. Clone the repository:
   ```sh
   git clone https://github.com/asep933/apotek.git
   cd pharmacy-website
   ```
2. Install dependencies:
   ```sh
   composer install
   npm install && npm run dev
   ```
3. Create a `.env` file:
   ```sh
   cp .env.example .env
   ```
4. Configure the database in the `.env` file.
5. Generate the application key:
   ```sh
   php artisan key:generate
   ```
6. Run migrations and seed the database:
   ```sh
   php artisan migrate --seed
   ```
7. Start the development server:
   ```sh
   php artisan serve
   ```

## Usage
After installation, access the application at `http://localhost:8000`. Log in as an admin to manage the displayed medicines.

## Deployment
For production deployment:
- Configure `.env` with production settings.
- Run `php artisan config:cache` for optimized performance.
- Set up a queue worker for background tasks if necessary.

## License
This project is licensed under the MIT License. Feel free to use and modify it as needed.
