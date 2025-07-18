<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">Laravel Nested Comment System (Max Depth: 3)</h1>

<p align="center">
A simple Laravel 12 application where users can create posts and leave comments with replies — up to 3 levels deep.
</p>

---

## 🚀 Features

- ✅ Create blog-style posts
- 💬 Add comments to each post
- 🔁 Reply to comments (max depth: 3)
- 🔄 Recursive Blade rendering for replies
- ❗ Comment depth enforced in backend
- 📦 Built with Laravel 12 and Bootstrap

---

## 🧱 Tech Stackhh

- Laravel 12
- Blade Templates
- Bootstrap 5.3
- MySQL
- Eloquent ORM

---

## 🛠️ Setup Instructions

Follow the steps below to get the project up and running locally.

```bash
# 1️⃣ Clone the repository
git clone https://github.com/shivalaxmirapan/laravel-nested-comments-live
cd laravel-nested-comments

# 2️⃣ Install PHP dependencies
composer install

# 3️⃣ configure environment
 .env file

# 4️⃣ Generate application key
php artisan key:generate

# 5️⃣ Update your .env with DB credentials (open .env file in editor)

# 6️⃣ Run migrations
php artisan migrate

# 7️⃣ Serve the application
php artisan serve

