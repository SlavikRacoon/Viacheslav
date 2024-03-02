<?php

namespace App\Api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ExampleGazzle
{
    public function yourMethod()
    {
        // Create a new Guzzle client instance
        $client = new Client();

        try {
            // Make a GET request to an external API
            $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/1');


            // Get the response body as a string
            $data = $response->getBody()->getContents();


            // Do something with the response data
            return $data;


        } catch (\Throwable $e) {
            // Handle exceptions, such as connection errors or server errors
            var_dump($e->getMessage());
        }

    }
}
