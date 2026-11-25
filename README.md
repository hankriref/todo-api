# ✅ Todo REST API - Laravel Backend

A clean and scalable **RESTful API** built with **Laravel** for managing tasks and to-do lists, designed to seamlessly power modern frontend clients (`todo-front` & `todo-front-v2`).

## ✨ Key Features
- **RESTful Architecture:** Clean JSON responses with proper HTTP status codes (`200`, `201`, `404`, `422`).
- **Full CRUD Operations:** Create, read, update, toggle completion status, and delete tasks.
- **Request Validation:** Server-side input validation using Laravel Form Requests.
- **CORS Configured:** Ready for cross-origin integration with React/Vue frontend applications.

## 🛠️ Tech Stack
- **Framework:** Laravel (PHP)
- **Database:** MySQL
- **API Format:** JSON / REST

## 📌 Main API Endpoints

| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/todos` | Retrieve all tasks |
| `POST` | `/api/todos` | Create a new task |
| `GET` | `/api/todos/{id}` | Retrieve a specific task |
| `PUT/PATCH` | `/api/todos/{id}` | Update a task or mark as completed |
| `DELETE` | `/api/todos/{id}` | Delete a task |

## 🚀 Installation & Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/hankriref/todo-api.git
   cd todo-api
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Configure environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Configure your database in `.env` and run migrations:
   ```bash
   php artisan migrate
   ```
5. Start the API server:
   ```bash
   php artisan serve
   ```
