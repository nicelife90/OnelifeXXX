# OnelifeXXX
Base website to manage girls

##Prérequis minimum

* Composer
* PHP version 5.4.0 or higher
* PHP extension php_gd2
* GD Library (>=2.0) 
* upload_max_filesize = 5M
* post_max_size = 5M

##Prérequis serveur (Testé)

* MySQL 5.5
* Ubuntu 14.04 LTS
* Apache 2.4.7

## Auteur

Yanick Lafontaine  

##Installation

* Clone this repo.
* Create database of your choice.
* Import 127_0_0_1.sql to your database.
* Copy /lib/mysql.example.php to /lib/mysql.php.
* Edit mysql.php and fill this file with right information.
* Run composer install.