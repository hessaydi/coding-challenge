
## Like & Dislike System in Laravel 5.2


[![Build Status](https://travis-ci.org/jeanquark/blog-home.svg?branch=master)](https://travis-ci.org/jeanquark/blog-home)

This project is a fully functional application based on the bootstrap pricing and the bootstrap 3 [pricing](https://getbootstrap.com/docs/4.1/examples/pricing/) theme. It is written in PHP and uses [Laravel 5.2](https://laravel.com) as a framework.


## Installation

You need to have a local server working on your computer to run this project locally. I recommand using [Homestead](https://laravel.com/docs/master/homestead) but you can also use [Xampp](https://www.apachefriends.org/fr/index.html), which is less complicated to install. So first make sure a local server is running on your computer. Next create the database on which blog posts will reside (for example using phpmyadmin). Then type the following commands in your favorite CLI (xampp users: make sure your emplacement is the *xampp/htdocs* folder):

Clone the repo:
```
git clone https://github.com/hessaydi/coding-challenge.git
```

Move to the newly created folder and install all dependencies:
```
cd coding-challenge
composer install
```

Open the .env.example file, edit it to match your database name, username and password (required step) as well as your email credentials (optional, but required for the contact form to work) and save it as .env file. Then build tables with command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Generate application key
```
php artisan key:generate
```
And then to run you local server

```
php artisan serve
```
And voilà! Now you should be able to test the application. Go to the login page and enter the provided credentials. Then click on the top nav email address to get to the admin area. Enjoy!



## Screenshots
Welcome:
![Home](https://github.com/hessaydi/coding-challenge/raw/master/screenshots/home.png "Home")

Shops page:
![Post](https://github.com/hessaydi/coding-challenge/raw/master/screenshots/shops.png "Shops")

Liked Shops page:
![Comment](https://github.com/hessaydi/coding-challenge/raw/master/screenshots/liked.png "Comment")




## License

Please refer to the [pricing theme](https://getbootstrap.com/docs/4.1/examples/pricing/) license.
