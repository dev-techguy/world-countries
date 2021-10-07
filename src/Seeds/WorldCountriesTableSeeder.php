<?php


namespace World\Countries\Seeds;


use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use World\Countries\Model\Country;
use World\Countries\Traits\API;
use World\Countries\Traits\Uuids;

class WorldCountriesTableSeeder extends Seeder
{
    use API;

    private \GuzzleHttp\Client $client;

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
        $currencyCode = $currencyName = $flag = '';

        foreach ($countries as $country) {
            // loop to get the currencyCode
            // foreach ($country->currencies as $currency) {
            //     $currencyCode = $currency->code;
            //     $currencyName = $currency->name;
            // }

            // create model parameters
            $saveCountry = [
                [
                    'id' => Uuids::generate()->string,
                    'name' => $country->name,
                    'slug' => Str::slug($country->name),
                    'data' => json_encode([
                        'name' => $country->name,
                        'capital' => $country->capital,
                        'flag' => $flag,
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
