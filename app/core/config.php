<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    //database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/MVC/public');
} else {
    //database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.yourwebsite.com/MVC/public');
}
