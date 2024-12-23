 
<?php

namespace Infrastructure\Http;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct(string $baseUrl)
    {
        $this->client = new Client(['base_uri' => $baseUrl]);
    }

    public function post(string $endpoint, array $data): array
    {
        $response = $this->client->post($endpoint, ['json' => $data]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
