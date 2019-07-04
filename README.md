# Create Laravel-Example Site

1) downloaded the Laravel installer using Composer: 
**_composer global require laravel/installer_**

2) created a directory for my laravel-example application:

**_laravel new laravel-example_**

This directory containing a fresh Laravel installation with all of Laravel's dependencies already installed.

3) created pages: home, about, contact, work 

4) **_npm install_**

5) **_npm run dev_**

6) **_npm run watch_**

7) create some Controller:

**_php artisan make:controller FrontEndController_**

8) create:

**_php artisan make:migration create_pages_table_**

9) do migration:
**_php artisan migrate_**

10) 
**_php artisan migrate:rollback_**

11) create seeder:
**_php artisan make:seeder PagesTableSeeder_**


**_composer dump-autoload_**

**_php artisan db:seed_**

12) **_php artisan migrate:refresh --seed_**

13) create a model:

**_php artisan make:model Page_**


INSERT INTO `pages`(`title`, `slug`, `content`) VALUES ([About Page],[about],[This is the About Page])
