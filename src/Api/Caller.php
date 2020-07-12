<?php
/**
 * A simple caller demonstration for
 * fetching data from the py-monitor api.
 *
 * @author Chris Rowles <me@rowles.ch>
 *
 * @since 1.0
 */

namespace RaspiMon\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Monitor.
 */
class Caller
{
    /** @var Client the api client */
    private Client $client;

    /**
     * Monitor constructor.
     *
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('API_URL'),
        ]);
    }

    /**
     * Call Api.
     *
     * @param string $method
     * @param string $endpoint
     *
     * @return array|bool
     */
    public function call(string $endpoint, string $method = 'GET')
    {
        if (env('APP_DEBUG') === true) {
            $file = __DIR__.'/../../tests/'.$endpoint.'.json';

            if (!file_exists($file)) {
                return false;
            }

            return toArray(json_decode(file_get_contents($file)));
        }

        if (substr($endpoint, 0, 1) !== '/') {
            $endpoint = '/'.$endpoint;
        }

        try {
            $response = $this->client->request($method, $endpoint);

            if (!$response) {
                app('log')->error('could not fetch from ' . $endpoint);

                return false;
            }

            return toArray(json_decode($response->getBody()->getContents()));

        } catch (GuzzleException $e) {
            app('log')->error($e->getMessage());

            return false;
        }
    }
}
