<?php

/**
 * ------------------------------------
 * Define all the request options here
 * ------------------------------------
 */
return [
    /**
     * ------------------------------------
     * set the base endpoint and urls here
     * and the access key
     * ------------------------------------
     */
    $access_key = env('COUNTRY_ACCESS_KEY'),
    'endpoint' => 'http://api.countrylayer.com/v2/all?access_key=' . $access_key,
];
