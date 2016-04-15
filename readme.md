# SocietyCMS
The only CMS designed for you and your society.

[![Build Status](https://travis-ci.org/SocietyCMS/SocietyCMS.svg?branch=master)](https://travis-ci.org/SocietyCMS/SocietyCMS) [![Latest Stable Version](https://poser.pugx.org/societycms/societycms/v/stable)](https://packagist.org/packages/societycms/societycms) [![Total Downloads](https://poser.pugx.org/societycms/societycms/downloads)](https://packagist.org/packages/societycms/societycms) [![Latest Unstable Version](https://poser.pugx.org/societycms/societycms/v/unstable)](https://packagist.org/packages/societycms/societycms) [![License](https://poser.pugx.org/societycms/societycms/license)](https://packagist.org/packages/societycms/societycms)

- [Introduction](#introduction)
- [Installation](#installation)

<a name="introduction"></a>
## Introduction

**This is an alpha, experimental release of SocietyCMS. Things will change. Things will break. There are bugs. Thank you for testing!**


<a name="installation"></a>
## Installation

```bash
composer create-project societycms/societycms:dev-master --prefer-source
```
After the installation has finished, change into your project directory and run the install command:
```bash
php artisan society:install
```

This will perform the following cations:

* Setup database information
* Running migrations
* Running seeds
* Publishing assets
* Create a first admin account

### Modules
Optionally you can install a few 1st-party content modules:
```bash
composer require societycms/module-blog:dev-master
composer require societycms/module-documents:dev-master
composer require societycms/module-gallery:dev-master
composer require societycms/module-page:dev-master
```

### Demo Mode
To fill the Database with Demo data, run the following command:
```bash
php artisan society:demo
```