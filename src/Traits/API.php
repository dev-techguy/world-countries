<?php


namespace World\Countries\Traits;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait API
{
    /**
     *  instantiating controller
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => config('countries.endpoint')
        ]);
    }

    /**
     * make request to the public api
     * for country code,currency,flag,city
     * @return mixed
     * @throws GuzzleException
     */
    public function makeRequest(): mixed
    {
        $response = $this->client->request('GET');
        return json_decode($response->getBody());
    }
}
