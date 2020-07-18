<?php


namespace World\Countries\Seeds;


use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;
use World\Countries\Model\Country;
use World\Countries\Traits\API;

class WorldCountriesTableSeeder extends Seeder
{
    use API;

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     * @throws GuzzleException
     */
    public function run()
    {
        // create countries
        $countries = $this->makeRequest();
        $currencyCode = $currencyName = '';

        foreach ($countries as $country) {
            // loop to get the currencyCode
            foreach ($country->currencies as $currency) {
                $currencyCode = $currency->code;
                $currencyName = $currency->name;
            }

            // create model parameters
            $saveCountry = [
                [
                    'id' => Uuid::generate()->string,
                    'name' => $country->nativeName,
                    'slug' => Str::slug($country->nativeName),
                    'data' => json_encode([
                        'name' => $country->name,
                        'capital' => $country->capital,
                        'flag' => $country->flag,
                        'short2Code' => $country->alpha2Code,
                        'short3Code' => $country->alpha3Code,
                        'currencyCode' => $currencyCode,
                        'currencyName' => $currencyName,
                        'callingCode' => $country->callingCodes[0],
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ];

            // store
            DB::table((new Country())->getTable())->insert($saveCountry);
        }
    }
}
