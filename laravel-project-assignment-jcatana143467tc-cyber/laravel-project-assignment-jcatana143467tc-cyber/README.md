[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/Xjz-HK3m)
[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-2e0aaae1b6195c2367325f4f02e2d04e9abb55f0b24a779b69b11b9e10269abc.svg)](https://classroom.github.com/online_ide?assignment_repo_id=23290620&assignment_repo_type=AssignmentRepo)
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Project Setup Guide (For Students)

Follow these steps to clone and run the project locally. You are encouraged to explore and modify the code freely.

### 1. Clone the Repository

```bash
git clone <https://github.com/lj-torbs/fresh-laravel-app.git>
```

### 2. Install Dependencies

Install PHP and JavaScript dependencies:

```bash
composer install
npm install
```

### 3. Setup Environment File

Copy the example environment file:

```bash
cp .env.example .env
```

Then open `.env` and configure your database and other settings if needed.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations (if applicable)

```bash
php artisan migrate
```

### 6. Build Frontend Assets

```bash
npm run dev
```

### 7. Run the Application

```bash
php artisan serve
```

Open your browser and go to:

```
http://127.0.0.1:8000
```

---

## Notes for Students

* Feel free to modify the code and experiment.
* Breaking things is part of learning—don’t be afraid to try.
* If something stops working, you can always re-clone the project.
* Make sure your database is properly configured in `.env`.

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. It simplifies common tasks like routing, authentication, and database management.

For full documentation, visit: [https://laravel.com/docs](https://laravel.com/docs)

---

## License

This project follows the MIT license.
