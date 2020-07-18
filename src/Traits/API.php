<?php


namespace World\Countries\Traits;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait API
{
    /**
     * @var Client
     */
    private $client;

    /**
     *  instantiating controller
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://restcountries.eu/rest/v2/'
        ]);
    }

    /**
     * make request to the public api
     * for country code,currency,flag,city
     * @return mixed
     * @throws GuzzleException
     */
    public function makeRequest()
    {
        $response = $this->client->request('GET', 'all');
        return json_decode($response->getBody());
    }
}
