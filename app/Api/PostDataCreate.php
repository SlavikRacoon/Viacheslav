<?php

namespace App\Api;

class PostDataCreate
{
    public function getPostData()
    {
        $json = $this->restAPI('https://jsonplaceholder.typicode.com/todos/1');
        $data = json_decode($json, true);
        var_dump($data);
    }

    public function restAPI(string $url):string
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);

        if(curl_errno($curl)){
            return 'cURL error: ' . curl_error($curl);
        }
        curl_close($curl);

        return $response;
    }
}
