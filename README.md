# Chat App

This is a chat application. It allows users to register an account and login. Currently, there is only one 
chat room common for all users.  I made this project in order to get familiar with [Laravel](https://laravel.com/) and
[VueJS](https://vuejs.org/).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

You will need the following before installing this Chat App on your system:

1. You will need PHP and a database, ideally MySQL. You can have both by installing and configuring [XAMPP](https://www.apachefriends.org/index.html).

2. You will need [NodeJS](https://nodejs.org/en/).

3. You will need [Composer](https://getcomposer.org/).

4.  Make sure you have a [Pusher account](https://pusher.com/).

### Installing

Follow these steps in order to get the app running
on your system. 

1. Clone repo or download the project.

2. Open cmd and go to your project directory folder.

3. Install composer dependencies from your terminal.

```bash
composer install
```

4. Install node dependencies from your terminal.

```bash
npm install
```

5. Duplicate `.env.example` and rename it `.env`.

Then run to generate [App Key](https://stackoverflow.com/questions/33370134/when-to-generate-a-new-application-key-in-laravel/33370272):

```bash
php artisan key:generate
```

6. Setup a database and add the database credentials to
your`.env` file.

```txt
DB_CONNECTION=
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

7. Add Pusher credentials to your `.env` file

```txt
PUSHER_APP_ID=1199211
PUSHER_APP_KEY=bdb0cebf760dcd4dd390
PUSHER_APP_SECRET=f713bf6313f59dfb40d0
PUSHER_APP_CLUSTER=us3
```

and make sure to set broadcast driver to pusher in the
`.env` file.

```txt
BROADCAST_DRIVER=pusher
```

8. Run migrations to generate tables in your database.

```txt
php artisan migrate
```

9. You should be all good to go now. Just run the following to get run the app.

```txt
php artisan serve
```

## Improvements

1. Currently we only have one chatroom. There should be multiple chatrooms and users should be able to create their own.

2. Project should have automated testing.

3. Users should be able to remove or edit their accounts.

## Built With

* [Laravel](https://laravel.com/docs/8.x) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management for PHP
* [NodeJS](https://nodejs.org/en/) - Dependency package manager
* [Pusher](https://pusher.com/) - Realtime features
* [Laravel Breeze with Inertia](https://laravel.com/docs/8.x/starter-kits) - Authentication scaffolding


## Authors

* **Ramyar Saeedi-Saghez** 

## Acknowledgments

* [Pusher tutorial](https://pusher.com/tutorials/chat-laravel/) helped with setting up the realtime notifications.