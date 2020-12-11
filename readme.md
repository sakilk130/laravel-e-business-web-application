# laravel-e-business-web-application

This is built on Laravel Framework 5.8 This was built for demonstrate purpose.

## Installation

Clone the repository-

```
git clone https://github.com/sakilk130/laravel-e-business-web-application.git
```

Then cd into the folder with this command-

```
cd laravel-e-business-web-application
```

Then do a composer install

```
composer install
```

Then create a environment file using this command-

```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

At last generate application key, which will be used for password hashing, session and cookie encryption etc.

```
php artisan key:generate
```

## Run server

Run server using this command-

```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.
