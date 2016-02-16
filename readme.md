# SocietyCMS
The only CMS designed for you and your society.

[![License](https://poser.pugx.org/SocietyCMS/SocietyCMS/license.svg)](https://packagist.org/packages/SocietyCMS/SocietyCMS)


- [Introduction](#introduction)
- [Installation](#installation)

<a name="introduction"></a>
## Introduction

**This is an alpha, experimental release of SocietyCMS. Things will change. Things will break. There are bugs. Thank you for testing!**


<a name="installation"></a>
## Installation

```
composer create-project societycms/societycms:dev-master --prefer-source
```

First update your .env with your Database settings. Memcache or Redis is required for caching!
Migrate your database:
```
php artisan module:migrate
php artisan module:seed      #optional, for demo data
```
To complete the installation create the following file: storage/installed.

Follow the [Laravel](https://laravel.com/docs/5.1) Instructions for basic configuration.

### Modules
Optionally you can install a few 1st-party content modules:
```
composer require societycms/module-blog:dev-master
composer require societycms/module-documents:dev-master
composer require societycms/module-gallery-blog:dev-master
composer require societycms/module-page-blog:dev-master

php artisan module:seed      #optional, for demo data
```
