# php-symfony-populate-database
A basic and lean recipe for loading the database with data in Symfony3.

This application will connect to the local mysql server, create a new database
called <strong><code>symfony</code></strong> and a new table inside this called
<strong><code>product</code></strong>.


Dependencies
-
git  
php v5.5.9+  
composer  
MySQL


To install
-
```
$ mkdir -vp php-symfony-populate-database  
$ cd php-symfony-populate-database  
$ git clone https://github.com/benjaminvickers/php-symfony-populate-data.git .  
$ composer install
```
Enter the database connection details when prompted by composer. Otherwise you
can edit the details in the <strong><code>app/config/parameters.yml</code></strong> 
file. Remember the database name should be set to <strong><code>symfony</code></strong>.


To setup
-
```
$ sudo service mysql start  
$ php bin/console doctrine:database:create  
$ php app/console doctrine:fixtures:load
```


To test in mysql
-
```
$ mysql -uroot -p  
$ use symfony;  
$ select * from product;
```


Resources
-
http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
