<?php
declare(strict_types=1);

namespace App\Services;

use App\Services\Contracts\CharactersService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Log;

class PotterService implements CharactersService
{

    /**
     * @var Client
     */
    private $client;
    /**
     * @var array
     */
    private $headers;
    /**
     * @var \Illuminate\Config\Repository
     */
    private $config;

    public function __construct()
    {
        $this->client = new Client();
        $this->config = config('potter');
        $this->headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return array|mixed
     */
    public function all()
    {
        try {
            $response = $this->client->request('GET', $this->config['urls']['base_url'] . $this->config['urls']['all']
                . '?key=' . $this->config['api_key'],
                [RequestOptions::HEADERS => $this->headers]);
            if ($response->getStatusCode() === 200) {
                return json_decode($response->getBody()->getContents());
            }
            return [];
        } catch (GuzzleException $e) {
            Log::error($e->getMessage());
        }
        return [];
    }

    public function getById(int $id)
    {
        // TODO: Implement getById() method.
    }
}