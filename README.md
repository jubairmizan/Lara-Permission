# Lara-Permission
[![Latest Stable Version](https://poser.pugx.org/jubairmizan/lara-permission/v/stable)](https://packagist.org/packages/jubairmizan/lara-permission)
[![Total Downloads](https://poser.pugx.org/jubairmizan/lara-permission/downloads)](https://packagist.org/packages/jubairmizan/lara-permission)
[![Latest Unstable Version](https://poser.pugx.org/jubairmizan/lara-permission/v/unstable)](https://packagist.org/packages/jubairmizan/lara-permission)
[![License](https://poser.pugx.org/jubairmizan/lara-permission/license)](https://packagist.org/packages/jubairmizan/lara-permission)
[![composer.lock](https://poser.pugx.org/jubairmizan/lara-permission/composerlock)](https://packagist.org/packages/jubairmizan/lara-permission)


**Installing Library on your projects**

`composer require jubairmizan/lara-permission`

**Add Providers**

Add `providers` on projects App\Config.php 

  `Jubairmizan\LaraPermission\LaraPermissionServiceProvider::class`
  
After add the providers run `composer dump-autoload`

**Migration**

Migrate the Library dependencies Table 

`php artisan migrate --path=database/migrations/lara_permission`

**Seeding**

Seed the Library dummy record to table

`php artisan db:seed --class=LaraPermissionRolesTableSeeder`
