# Create Laravel-Example Site

1) downloaded the Laravel installer using Composer: 
**_composer global require laravel/installer_**

2) created a directory for my laravel-example application:
**_laravel new laravel-example_**
This directory containing a fresh Laravel installation with all of Laravel's dependencies already installed.

3) created  views: home.blade.php, about.blade.php, contact.blade.php, work.blade.php
and configured /routes/web.php file. Also created navigator menu.

4) install manager packages and modules:
**_npm install_**

5) run developer mode:
**_npm run dev_**

6) run watcher:
**_npm run watch_**

7) created frontend Controller:
**_php artisan make:controller FrontEndController_**

8) created database (used phpmyadmin for this)

9) create table "pages" in database. To created a migration, used the make:migration Artisan command:
**_php artisan make:migration create_pages_table_**
**_php artisan migrate_**

10) to rollback the latest migration operation:
**_php artisan migrate:rollback_**

11) generated a seeder:
**_php artisan make:seeder PagesTableSeeder_**

12) regenerate Composer's autoloader:
**_composer dump-autoload_**

13) seed your database:
**_php artisan db:seed_**
or seed database using the migrate:refresh command:
 **_php artisan migrate:refresh --seed_**

14) create a model (for example Page):
**_php artisan make:model Page_**

16) make authorisation quick-start:
**_php artisan make:auth_**

17) customized authorisation 

18) add welcome.blade.page and configured route

19) add some CSS-styles



