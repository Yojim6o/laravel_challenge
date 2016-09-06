# CNN Article Extractor

This is a web application that accepts a CNN article URL and ships the article text to a database.

## Laravel Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## PHP Environment

For my PHP environment and MySQL database, I used MAMP, which can be found [here](https://www.mamp.info/).

## Download Composer

Go to [getcomposer.org](https://getcomposer.org/download/) and follow the instructions on their download page.

## Setup

These instructions will guide you through environment setup with a mySQL database.  If there's a more efficient way to setup the environment, please let me know!

- With a PHP enviornment set up, cd into your designated projects folder via the terminal.
- Clone the repository and run a Composer update
    ```
        > git clone git@github.com:Yojim6o/laravel_challenge.git
        > cd laravel_challenge
        > composer update
    ```
- Rename your .env.example file to .env.
- In your .env file, change the following parameters to the appropriate DB credentials
    ```
        > DB_CONNECTION=mysql
        > DB_HOST=localhost
        > DB_PORT=3306
        > DB_DATABASE=database-name
        > DB_USERNAME=username
        > DB_PASSWORD=password
    ```
- Go to config/database.php and change the DB credentials on lines 56-66.
- Generate an artisan key.
    ```
        > php artisan key:generate
    ```
- Run the migration in the terminal.
    ```
        > php artisan migrate
    ```
- Visit your project within the browser.  With my MAMP settings, I went to [http://localhost:8888/laravel_challenge/public/](http://localhost:8888/laravel_challenge/public/).

## How To Use

1. In the input field, past a CNN article URL (ie. [http://www.cnn.com/2016/09/06/us/chicago-homicides-visual-guide/index.html](http://www.cnn.com/2016/09/06/us/chicago-homicides-visual-guide/index.html)).
2. Click Submit.
3. The title of the article will appear below the submit button.
4. You can click on the article title to view the article details or keep adding articles
5. The article page will show the title, image, and article body.

## Issues?

Please let me know!  I will continue to refactor and improve the application.


