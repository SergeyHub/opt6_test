composer create-project --prefer-dist laravel/laravel .   
composer require laravel/ui   
php artisan ui bootstrap --auth
npm install   
npm run dev   
composer require yajra/laravel-datatables-oracle  
config/app.php   
```
.....
.....
'providers' => [
	....
	....
	Yajra\DataTables\DataTablesServiceProvider::class,
]
'aliases' => [
	....
	....
	'DataTables' => Yajra\DataTables\Facades\DataTables::class,
]
.....
.....
``` 
php artisan vendor:publish --provider="Yajra\DataTables\DataTablesServiceProvider"   
php artisan make:model Stuff -m  
php artisan make:model Company -m  
php artisan migrate   
php artisan db:seed  
#### deploy from git
composer install  
php artisan key:generate  
npm install  
php artisan migrate:fresh --seed  
php artisan serve  
email: admin@admin.com  
password: 12345678  
