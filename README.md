# <p align="center"><a href="#" target="_blank"><img src="https://knowledge.wharton.upenn.edu/wp-content/uploads/2019/01/country-flags-rankings.jpg"></a></p>

<p align="center">
   <h2 align="center"><b>World Countries API</b></h2><br>
   <a align="center" href="https://github.com/dev-techguy/world-countries/issues">
   <img align="center" src="https://img.shields.io/github/issues/dev-techguy/world-countries.svg">
   </a>
   <a align="center" href="https://github.com/dev-techguy/world-countries/network/members">
   <img align="center" src="https://img.shields.io/github/forks/dev-techguy/world-countries">
   </a>
   <a align="center" href="https://github.com/dev-techguy/world-countries/stargazers">
   <img align="center" src="https://img.shields.io/github/stars/dev-techguy/world-countries">
   </a>
   <a align="center" href="https://github.com/dev-techguy/world-countries/blob/master/LICENSE">
   <img align="center" src="https://img.shields.io/github/license/dev-techguy/world-countries.svg">
   </a>
   <a align="center" href="https://packagist.org/packages/techguy/world-countries-api">
   <img align="center" src="https://poser.pugx.org/techguy/world-countries-api/v">
   </a>
   <a align="center" href="https://packagist.org/packages/techguy/world-countries-api">
   <img align="center" src="https://poser.pugx.org/techguy/world-countries-api/downloads">
   </a>
   <br><br>
</p>

## Introduction
This package has api pointing to http://api.countrylayer.com. Fetches and stores all the countries in your local database.

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
php artisan vendor:publish --provider="World\Countries\WorldCountriesServiceProvider"
```

You will have to add this in the *database/seeds/DatabaseSeeder*. Before using the package model seed data for the countries:

Set your *ACCESS_KEY* in the **.env** file.
```dotenv
COUNTRY_ACCESS_KEY=
```

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

         /**
         * -------------------------------------
         * This is the sample data on how the
         * country data is stored in an object
         * -------------------------------------
         */
        {
        "id": "6ad0db80-c93b-11ea-9af5-bd4193f081f6",
        "name": "Kenya",
        "slug": "kenya",
        "data": {
            "flag": "https://restcountries.eu/data/ken.svg",
            "name": "Kenya",
            "capital": "Nairobi",
            "short2Code": "KE",
            "short3Code": "KEN",
            "callingCode": "254",
            "currencyCode": "KES",
            "currencyName": "Kenyan shilling"
        },
        "deleted_at": null,
        "created_at": "2020-07-18T21:12:42.000000Z",
        "updated_at": "2020-07-18T21:12:42.000000Z"
        }
```

## Usage
Follow the steps below on how to use the *world-countries-api*:

## Version Guidance

| Version | Status     | Packagist           | Namespace    | Repo                |
|---------|------------|---------------------|--------------|---------------------|
| 1.x     | Latest     | `techguy/world-countries-api` | `World\Countries` | [v1.1.7](https://github.com/dev-techguy/world-countries/releases/tag/v1.1.7)|

[world-countries-api-repo]: https://github.com/dev-techguy/world-countries.git

## Security Vulnerabilities
 For any security vulnerabilities, please email to [Bugs Support](mailto:bugs@shiftech.co.ke).
 
## License
 This package is open-source, licensed under the [MIT license](https://opensource.org/licenses/MIT).
