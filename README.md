# Laravel Authentication Project

This is a Laravel authentication system that includes user registration, login, and password confirmation.

---

## 🚀 Installation

```bash
# 1. Clone the repository
git clone https://github.com/Mahbub2236/auth.git
cd auth

# 2. Install dependencies
composer install

# 3. Copy .env file
cp .env.example .env

# 4. Update database credentials in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laraauth
DB_USERNAME=root
DB_PASSWORD=

# 5. Generate app key
php artisan key:generate

# 6. Import SQL database
# Option 1: Using MySQL CLI
mysql -u root -p laraauth < database.sql
# Option 2: Using phpMyAdmin (Import tab)

# 7. (Optional) Run migrations
php artisan migrate

# 8. Start local development server
php artisan serve

# Your app will be available at:
 http://127.0.0.1:8000