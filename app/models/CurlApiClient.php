<?php

class CurlApiClient
{
    private $apiEndpoint;

    public function __construct($apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }

    public function fetchData()
    {
        $ch = curl_init($this->apiEndpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);

        return json_decode($response, true);
    }
}
?>