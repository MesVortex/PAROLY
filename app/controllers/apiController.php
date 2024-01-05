<?php

class CurlApiClient
{
    private $apiEndpoint;

    public function __construct($apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * Fetch data from the API.
     *
     * @return array The decoded JSON response.
     */
    public function fetchData(): array
    {
        $ch = curl_init($this->apiEndpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);

        // Decode the JSON response
        return json_decode($response, true);
    }
    public function search($searchTerm)
    {
        $searchEndpoint = $this->apiEndpoint . '?uNm=' . urlencode($searchTerm);

        $ch = curl_init($searchEndpoint);
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