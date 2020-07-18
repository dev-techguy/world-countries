# <p align="center"><a href="#" target="_blank"><img src="https://knowledge.wharton.upenn.edu/wp-content/uploads/2019/01/country-flags-rankings.jpg"></a></p>

<p align="center">
 <center>
  <h2><b>World countries API</b></h2><br>
   <a href="https://github.com/SHIFTECH-AFRICA/shift-code-generator/issues">
   <img src="https://img.shields.io/github/issues/SHIFTECH-AFRICA/shift-code-generator.svg">
   </a>
   <a href="https://github.com/SHIFTECH-AFRICA/shift-code-generator/network/members">
   <img src="https://img.shields.io/github/forks/SHIFTECH-AFRICA/shift-code-generator.svg">
   </a>
   <a href="https://github.com/SHIFTECH-AFRICA/shift-code-generator/stargazers">
   <img src="https://img.shields.io/github/stars/SHIFTECH-AFRICA/shift-code-generator.svg">
   </a>
   <a href="https://packagist.org/packages/shiftechafrica/shift-code-generator">
   <img src="https://poser.pugx.org/shiftechafrica/shift-code-generator/v/stable">
   </a>
   <a href="https://packagist.org/packages/shiftechafrica/shift-code-generator">
   <img src="https://poser.pugx.org/shiftechafrica/shift-code-generator/downloads">
   </a>
   <br><br>
   </center>
</p>

## Introduction
This package has api pointing to https://restcountries.eu. Fetches and stores all the countries in your local database.

## Installing
The recommended way to install *world-countries-api* is through.
[Composer](http://getcomposer.org).

```bash
# Install package via composer
composer require techguy/world-countries-api
```

Next, run the Composer command to install the latest stable version of *techguy/world-countries-api*:

```bash
# Update package via composer
 composer update techguy/world-countries-api --lock
```

After installing, the package will be auto discovered, But if need you may run:

```php
# run for auto discovery <-- If the package is not detected automatically -->
composer dump-autoload
```

Then run this, to get the for your own configurations:

```php
# run this to get the configuration file at config/shift-code-generator.php <-- read through it -->
php artisan vendor:publish --provider="World\Countries\WorldCountriesServiceProvider"
```

You will have to add this in the *database/seeds/DatabaseSeeder*. To ensure we seed some data to set the default dates that will be used in generating the codes:

```php
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // other seeds...
         $this->call(\World\Countries\Seeds\WorldCountriesTableSeeder::class);
    }
```

## Usage
Follow the steps below on how to use the *world-countries-api*:


## Version Guidance

| Version | Status     | Packagist           | Namespace    | Repo                |
|---------|------------|---------------------|--------------|---------------------|
| 1.x     | Latest     | `techguy/world-countries-api` | `World\Countries` | [v1.0.0](https://github.com/dev-techguy/world-countries/releases/tag/v1.0.0)|

[world-countries-api-repo]: https://github.com/dev-techguy/world-countries.git

## Security Vulnerabilities
 For any security vulnerabilities, please email to [Bugs Support](mailto:bugs@shiftech.co.ke).
 
## License
 This package is open-source, licensed under the [MIT license](https://opensource.org/licenses/MIT).
