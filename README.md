# Advanced Login System

This project is an **Advanced Login System** built with the [Laravel](https://laravel.com/) PHP framework. It provides a modern authentication interface with registration and login pages styled using Tailwind CSS and Vite.

## Features

- User registration and login
- "Remember Me" functionality
- Password encryption and security best practices
- Responsive UI with Tailwind CSS
- Laravel session and CSRF protection
- Ready for further extension (social login, email verification, etc.)

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm

### Installation

1. **Clone the repository:**
   ```sh
   git clone <your-repo-url>
   cd advanceLoginSystem
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install Node dependencies:**
   ```sh
   npm install
   ```

4. **Copy the example environment file and set your environment variables:**
   ```sh
   cp .env.example .env
   ```

5. **Generate the application key:**
   ```sh
   php artisan key:generate
   ```

6. **Configure your database in `.env` and run migrations:**
   ```sh
   php artisan migrate
   ```

7. **Build frontend assets:**
   ```sh
   npm run build
   # or for development
   npm run dev
   ```

8. **Start the development server:**
   ```sh
   php artisan serve
   ```

Visit [http://localhost:8000](http://localhost:8000) to access the application.

## Project Structure

- `app/Http/Controllers/pageController.php` — Handles login and registration page rendering.
- `resources/views/Login.blade.php` — Login page UI.
- `resources/views/register.blade.php` — Registration page UI.
- `routes/web.php` — Web routes for login and registration.
- `resources/css/app.css` — Tailwind CSS styles.
- `resources/js/app.js` — Frontend JS entrypoint.

## Customization

- Update the UI in the Blade templates in `resources/views/`.
- Add more authentication features using Laravel's built-in authentication scaffolding or packages.

## Security

- Passwords are hashed using Laravel's hashing system.
- CSRF protection is enabled by default.
- Sessions are securely managed via Laravel's session configuration.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Built with [Laravel](https://laravel.com/).